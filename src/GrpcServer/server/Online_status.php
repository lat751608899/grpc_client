<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Online_status
{
	public $client;
	public $packageName = 'cfwf.micro_service.online_status';
	public $serviceName = 'OnlineStatus';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}



	public function UpdateOnlineStatus($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}