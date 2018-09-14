<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/29
 * Time: 17:42
 */

namespace GrpcServer;

use Google\Protobuf\Internal\FileDescriptorSet;

/**
 * Class ConfigLoad
 * @package GrpcServer
 */
class ConfigLoad implements \ArrayAccess
{
	/**
	 * 服务配置 config/methods.php
	 * @var array
	 */
	protected $config;
	/**
	 * host配置 config/host.php
	 * @var
	 */
	protected $hostConfig;
	/**
	 * map配置 config/map.php
	 * @var
	 */
	protected $MapConfig;
	/**
	 * 配置文件地址
	 * @var string
	 */
	protected $configPath = __DIR__.'/config/';
	/**
	 * 生成的server地址
	 * @var string
	 */
	protected $serverPath = __DIR__.'/server/';
	/**
	 * server.temp 地址
	 * @var string
	 */
	protected $serverTempPath = __DIR__.'/temp/';
	/**
	 * metadata 地址
	 * @var string
	 */
	protected $metadataPath;
	/**
	 * host文件
	 * @var string
	 */
	protected $hostConfigFile;
	/**
	 * map文件
	 * @var string
	 */
	protected $mapConfigFile;
	/**
	 * Temp文件
	 * @var string
	 */
	protected $serverTempFile = __DIR__.'/server/client.temp';
	/**
	 * @var
	 */
	protected $hostname;
	/**
	 * @var string
	 */
	protected $methodTemp = '
	public function %METHOD%()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	';

	protected $rpcClients;

	/**
	 * ConfigLoad constructor.
	 * @param bool $enforce true 强制重新生成server
	 * @throws \Exception
	 */
	public function __construct($enforce = false)
	{
		$this->metadataPath = dirname(__DIR__).'/GPBMetadata/';
		$this->hostConfigFile = $this->configPath.'host.php';
		$this->mapConfigFile = $this->configPath.'map.php';
		$this->setHostname();
		$this->setMapName();
		$this->loadPackageAndMethods();
	}

	/**
	 * 获取 server的host地址
	 * @param $name
	 * @return mixed
	 * @throws \Exception
	 */
	public function getHostname($name, $webVersion = '')
	{
		if(!isset($this->hostConfig[$name])){
			$name = $this->getMapName($name);
		}
		$hosts = $this->hostConfig[$name];
		if($webVersion){
			$host = $hosts[$webVersion];
		}else{
			if(!isset($hosts['develop'])){
				throw new \Exception('没有定义这个服务的host');
			}
			$host = $hosts['develop'];
		}
		return $host;
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function __get($name)
	{
		if(isset($this->config[$name])){
			return $this->config[$name];
		}
	}

	/**
	 * 解析metadata文件获取package和methods
	 * @return array
	 * @throws \Exception
	 */
	private function loadPackageAndMethods()
	{
		$file = new \FilesystemIterator($this->metadataPath, \FilesystemIterator::SKIP_DOTS);
		if (iterator_count($file) <= 0){
			throw new \Exception("没有metadata文件");
		}
		$proto = [];
		foreach ($file as $f){
			$tmp = $this->parseMethods(file_get_contents($f->getPathname()));
			if(!$tmp){
			    continue;
            }
            $proto += $tmp;
		}
		$this->rpcClients = $proto;
		return $proto;
	}

	/**
	 * 解析服务方法
	 * @param $content
	 * @return array
	 */
	private function parseMethods($content)
	{
		$desc = $this->parseMetadata($content);
		$namespace = $this->getNameSpace($package = $desc->getPackage());
		$service = $desc->getService();
		if(count($service) < 1){ // proto 文件中没有方法的不解析
		   return;
        }
        $serverName = $service[0]->getName();
        $methods = $service[0]->getMethod();
		$methodsData = [];
		$serverStr = $this->parseServers($package,$serverName);
		$file = $this->serverPath.$this->getClassName($package).'.php';
		foreach ($methods as $value){
			$methodsData[$package.'.'.$serverName]['method'][$value->getName()] = [
				'request' => $namespace.'\\'.substr($value->getInputType(), strrpos($value->getInputType(), '.')+1),
				'response' => $namespace.'\\'.substr($value->getOutputType(), strrpos($value->getOutputType(), '.')+1),
			];
			$serverStr .= "\n".str_replace('%METHOD%', $value->getName(), $this->methodTemp);
		}
		$serverStr .= "\n"."}";
		//file_put_contents($file, $serverStr);

		return $methodsData;
	}

	/**
	 * 解析metadata
	 * @param $content
	 * @return object
	 */
	private function parseMetadata($content)
	{
		return $this->getProtoDescriptor(eval($this->getMetadata($content)));
	}

	/**
	 * 获取ProtoDescriptor
	 * @param $protoSource
	 * @return object
	 */
	private function getProtoDescriptor($protoSource)
	{
		$protoDes = new FileDescriptorSet();
		$protoDes->mergeFromString($protoSource);

		return $protoDes->getFile()[0];
	}

	/**
	 * @param $source
	 * @return string
	 */
	private function getMetadata($source)
	{
		$source =  trim(preg_replace('/[\s\S]+(hex2bin\([\s\S]+\))\);[\s\S]+/', '\1',$source));
		return 'return '.$source.';';
	}

	/**
	 * 废弃
	 * @param $contents
	 * @return array
	 * @throws \Exception
	 */
	private function parseProto($contents)
	{
		preg_match('/package\s*([\w\._]+)\s*;/', $contents,$package);
		preg_match('/service\s+(\w+)\s+\{/', $contents,$service);
		preg_match_all('/rpc\s+(\w+)\s*\((\w+)\)\s*returns\s*\((\w+)\)/', $contents,$rpcMethod);
		if(!empty($package)){
			$packageName = $package[1];
		}
		if(empty($service) || empty($rpcMethod)){
			throw new \Exception('proto文件定义错误,没有service或rpc方法');
		}
		$serviceName = $service[1];
		list($none,$rpcMethodName,$rpcMethodRequest,$rpcMethodResponse) = $rpcMethod;
		$rpcConfig = [];
		$keyname = $packageName.".".$serviceName;
		foreach ($rpcMethodName as $key => $name){
			$namespace = $this->getNameSpace($packageName);
 			$rpcConfig[$keyname]['method'][trim($name)] = [
 					'request' => "\\".$namespace."\\".trim($rpcMethodRequest[$key]),
 					'response' => "\\".$namespace."\\".trim($rpcMethodResponse[$key])
		    ];
 		}
 		return $rpcConfig;
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return isset($this->config[$offset]);
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet($offset)
	{
		return $this->config[$offset];
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
		$this->config[$offset] = $value;
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		unset($this->config[$offset]);
	}

	/**
	 * @throws \Exception
	 */
	private function setHostname()
	{
		if(file_exists($this->hostConfigFile)){
			$this->hostConfig = require $this->hostConfigFile;
		}else{
			throw new \Exception('没有host配置文件');
		}
	}

	/**
	 * @throws \Exception
	 */
	private function setMapName()
	{
		if(file_exists($this->mapConfigFile)){
			$this->MapConfig = require $this->mapConfigFile;
		}else{
			throw new \Exception('没有map配置文件');
		}
	}

	/**
	 * @param $name
	 * @return mixed
	 * @throws \Exception
	 */
	public function getMapName($name)
	{
		if(!isset($this->MapConfig[$name])){
			throw new \Exception('没有定义这个服务的map映射');
		}
		return $this->MapConfig[$name];
	}

	/**
	 * @param $name
	 * @return mixed
	 * @throws \Exception
	 */
	public function getNewName($name)
	{
	    $new = array_search($name, $this->MapConfig);

        return $new ?: $name;
	}

	/**
	 * @param $package
	 * @return string
	 */
	public function getNameSpace($package)
	{
		return '\\'.implode('\\', array_map('ucfirst',explode('.', $package)));
	}

	/**
	 * @param $package
	 * @param $serverName
	 * @return bool|mixed|string
	 */
	private function parseServers($package, $serverName)
	{
		$str = file_get_contents($this->serverTempFile);
		$str = str_replace(['%CLASSNAME%','%PACKAGENAME%','%SERVICENAME%'],
		                  [$this->getClassName($package),$package,$serverName], $str);

		return $str;
	}

	/**
	 * @param $package
	 * @return string
	 */
	private function getClassName($package)
	{
		return ucfirst(substr($package, strrpos($package, '.')+1));
	}

    public function getRpcClients($clientName = '')
    {
        if(!$clientName){
            return $this->rpcClients;
        }

        return isset($this->rpcClients[$clientName]['method'])
            ? $this->rpcClients[$clientName]['method'] : [];
	}

    public function getRpcMethodResponse($clientName, $method)
    {
        $rpcMethod = $this->getRpcClients($clientName);

        return isset($rpcMethod[$method]['response'])
            ? $rpcMethod[$method]['response'] : '';
	}
}