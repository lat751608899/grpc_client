<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Tokencheck
{
	public $client;
	public $packageName = 'cfwf.micro_service.tokencheck';
	public $serviceName = 'TokenCheck';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function CheckUserPassword($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CheckUserPasswordWhenClientLogin($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CheckUserTokenWhenClientAccess($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function ModifyUserPassword($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CreateToken($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CheckToken($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}