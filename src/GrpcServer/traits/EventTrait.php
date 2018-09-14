<?php
namespace GrpcServer\traits;

use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GrpcServer\Event;

/**
 * Trait FieldTrait
 * @package GrpcServer\traits
 */
trait EventTrait
{
	/**
	 * @var array
	 */
	protected $eventType = ['response', 'request', 'init'];
	/**
	 * @var
	 */
	protected $clientName;

	protected $methodName;

	protected $clientClassName;

	protected $startTime;

	protected $endTime;


	/**
	 * @param $clientName
	 */
	protected function setEvent($clientName)
	{
		$this->clientName = $clientName;
		foreach ($this->eventType as $event){
			$method = 'set'.ucwords($event).'Event';
			if(method_exists($this, $method)){
				$this->$method($clientName);
			}
		}
	}

	/**
	 * @param $clientName
	 */
	protected function setResponseEvent($clientName)
	{
		Event::add($clientName.'_response', function ($response){
            $this->endTime = microtime(true);
			// grpc 有错误 记录日志（目前只有基于thinkphp的日志，以后在开发自己的日志）
			if ($response[1]->code != 0) {
				$this->saveLog("Grpc 又崩了。。。,服务名：".$this->clientName.",错误码：".$response[1]->code.",错误信息：".$response[1]->details,'error');
				$this->error = $response[1];
				$this->where = [];
				$this->requestServer = '';
				// throw new \Exception("GRPC 崩了！");
			}
			if(method_exists($response[0], 'getResult')){
				$result = $response[0]->getResult();
				if($result != 0){
					$response[0]->setResult($result-1);
				}else{
					// throw new \Exception('grpc server has some problems, result code is :'.$result);
				}
			}
			$this->saveLog('RunTime: '.($this->endTime - $this->startTime)." s");
		});
	}

	/**
	 * @param $clientName
	 */
	protected function setRequestEvent($clientName)
	{
		Event::add($clientName.'_request', function ($request){
		    $this->startTime = microtime(true);
			// 记录request
            if(count($request) == 2){
                $this->methodName = $request[1];
                $request = $request[0];
            }
			$data = $this->dealRequestToArray($request);
			$this->saveLog("[ GRPC_REQUEST ]: method ".$this->methodName.json_encode($data));
		});
	}

	/**
	 * @param $clientName
	 */
	protected function setInitEvent($clientName)
	{
		Event::add($clientName.'_init', function ($server){
			// 记录 client
			$client = get_class($server->client);
			$data = json_encode(['client' => $client,'host'=>$server->host,'webVersion'=>$server->webVersion]);
			$this->saveLog('[ GRPC_INIT ]:'.$data);
		});
	}

	/**
	 * @param $log
	 * @param string $type
	 */
	protected function saveLog($log, $type = 'notice')
	{
		if(class_exists(\think\Log::class)){
			\think\Log::record($log,$type);
		}
	}

	/**
	 * @param $request
	 * @return array
	 */
	protected function dealRequestToArray($request)
	{
		$field = $this->getField(get_class($request));
		$data = [];
		foreach ($field as $key => $value){
			$getter = $value->getGetter();
			$req = $res = $request->$getter();
			if($message = $value->getMessageType()){  // repeat 的特殊处理
				$sonField = $this->getField($message->getClass());
				$res = [];
				if($req instanceof  Message){
					$res = $this->dealRequestToArray($req);
				}else{
					foreach ($req as $val){
						$res[] = array_map(function ($item) use ($val){
							$getter = $item->getGetter();
							$req = $val->$getter();
							return $req;
						}, $sonField);
					}
				}
			}else if($req instanceof RepeatedField){  // resid=>[11111,2222,4333] repeated 格式
				$res = [];
				foreach ($req as $val){
					$res[] = $val;
				}
			}
			$data[$key] = $res;
		}

		return $data;
	}

    /**
     * grpc出问题时返回一个空的 response
     * @return mixed
     */
	protected function getNullResponse()
    {
        $responseName = $this->config->getRpcMethodResponse($this->clientName,$this->methodName);
        if(class_exists($responseName)){
            return new $responseName();
        }
    }
}