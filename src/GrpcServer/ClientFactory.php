<?php

namespace GrpcServer;

use Google\Protobuf\Internal\GPBLabel;
use Google\Protobuf\Internal\Message;
use GrpcServer\traits\EventTrait;
use GrpcServer\traits\FieldTrait;

/**
 * Class ClientFactory
 * @package GrpcServer
 */
class ClientFactory
{
	use FieldTrait,EventTrait;

	/**
	 * @var \GrpcServer\ConfigLoad
	 */
	private $config;
	/**
	 * @var
	 */
	public $client;
	/**
	 * @var
	 */
	protected $response;
	/**
	 * @var array
	 */
	protected $where = [];
	/**
	 * @var
	 */
	protected $error;
	/**
	 * @var
	 */
	protected $code;

	protected $requestServer;
	protected $host;
	protected $webVersion;


	/**
	 * ClientFactory constructor.
	 * @param \GrpcServer\ConfigLoad $configLoad
	 * @param null $webVersion
	 */
	private function __construct($name, $webVersion = null, $channel = null, $opts = [])
	{
		error_reporting(-1);
		set_exception_handler([$this, 'handleException']);
		$this->setEvent($name);  // 添加监听
		$this->config = new ConfigLoad();
		if (!$webVersion) {
			$webVersion = defined('WEB_VERSION') ? WEB_VERSION : 'develop';
		}
		// 直接 cfwf.micro_service.school_weike.SchoolWeike
		$clientName = $this->getClientName($name);
		if(!class_exists($clientName)){  //  school_weike.SchoolWeike 转 cfwf.micro_service.school_weike.SchoolWeike
			$name = $this->config->getNewName($name);
			$clientName = $this->getClientName($name);
		}
		$this->host = $host = $this->config->getHostname($name,$this->webVersion = $webVersion);
		$opts = array_merge($opts, [
			'credentials' => \Grpc\ChannelCredentials::createInsecure()
		]);
		$this->client = new $clientName($host, $opts, $channel);
		Event::listen($this->clientName.'_init',$this);
	}

	/**
	 * @param $name
	 * @param null $webVersion
	 * @param null $channel
	 * @param array $opts
	 * @return \GrpcServer\ClientServer
	 * @throws \Exception
	 */
	public static function createClient($name, $webVersion = null, $channel = null, $opts = [])
	{
		return new static($name, $webVersion, $channel, $opts);
	}

	/**
	 * @param $e
	 */
	public function handleException($e)
	{
		if(class_exists('\think\Error')){
			restore_exception_handler();
			\think\Error::appException($e);
		}else{
			echo $e->getMessage();
		}
	}

	private function getClientName($name)
	{
		// cfwf.micro_service.school_weike.SchoolWeike
		$className = preg_replace_callback('/\.([\w_-]{1})/', function ($match){
			return '\\'.strtoupper($match[1]);
		},$name);
		return ucfirst($className).'Client';
	}

	/**
	 * @param $name
	 * @param $param
	 * @return \Grpc\SimpleSurfaceActiveCall
	 * @throws \Exception
	 */
	public function __call($name, $param)
	{
		if(empty($param)){
			throw new \Exception('the request is requied');
		}
		return  $this->getResponse($name,$param);
	}

	/**
	 * @param $method
	 * @return \GrpcServer\GrpcResponse|void
	 * @throws \Exception
	 */
	public function getResponse($method,$param = [])
	{
		if(!$param){  // 通过server调用的
			$param[0] = empty($this->where)? $this->requestServer : $this->where;
		}
		if(!$param[0] instanceof Message){ // 通过__call调用的数组条件的
			$this->where = $param[0];
			$param[0] = $this->getRequest($method);
		}
		Event::listen($this->clientName.'_request',$param[0]);
		$res = call_user_func_array([$this->client, $method], $param);
		$response = $res->wait();
		Event::listen($this->clientName.'_response',$response);
		$this->setCode($response[1]);
		$this->where = [];
		$this->requestServer = '';
		return new GrpcResponse($response[0],$response[1]);
	}

	/**
	 * @param $field
	 * @param string $value
	 * @return $this
	 */
	public function where($field, $value = '')
	{
		if (is_array($field)) {
			$this->where = array_merge($field,$this->where);
		} elseif(is_string($field)) {
			$this->where[$field] = $value;
		}elseif($field instanceof Message){
			$this->requestServer = $field;
		}

		return $this;
	}

	/**
	 * @param $requestClass
	 * @return mixed
	 */
	private function getRequest($method)
	{
		$requestClass = $this->getRequestClassName($method);
		if (!class_exists($requestClass)) {
			throw new \Exception($requestClass . ' not found');
		}
		$request = $this->dealRequest(new $requestClass(),$this->getField($requestClass));

		return $request;
	}

	/**
	 * @return mixed
	 */
	public function getError()
	{
		return $this->error;
	}

	/**
	 * @return mixed
	 */
	public function getWhere()
	{
		return $this->where;
	}

	/**
	 * @param $request
	 * @param $fieldData
	 * @param string $value
	 * @return mixed
	 */
	public function dealRequest($request, $fieldData, $value = '')
	{
		$value = $value? : $this->where;
		foreach ($fieldData as $key => $field){
			if(!is_array($value)){
				return $request;
			}
			if(in_array($key, array_keys($value))){
				$setter = $field->getSetter();
				$messageType = $field->getMessageType();
				if(!$messageType){ // 普通类型的
					$request->$setter($value[$key]);
				}else{  //message类型的
					$fieldDataSon = $this->dealField($messageType->getField());
					$requestSonClass = $messageType->getClass();
					if($field->getLabel() == GPBLabel::REPEATED){  // repeated 数组格式
						foreach ($this->where[$key] as $val){
							$requestSon  = new $requestSonClass;
							$data[] = $this->dealRequest($requestSon, $fieldDataSon,$val);
						}
					}else{  // 直接是message形式的
						$requestSon  = new $requestSonClass;
						$data = $this->dealRequest($requestSon, $fieldDataSon,$this->where[$key]);
					}
					$request->$setter($data);
				}
			}
		}
		return $request;
	}

	/**
	 * @return mixed
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param mixed $code
	 */
	public function setCode($code)
	{
		$this->code = $code;
	}

	private function getRequestClassName($name)
	{
		$methodReflection = new \ReflectionMethod($this->client, $name);
		$parameters = $methodReflection->getParameters();
		$request = $parameters[0]->getClass()->name;

		return $request;
	}
}