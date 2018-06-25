<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class View_stat
{
	public $client;
	public $packageName = 'cfwf.micro_service.view_stat';
	public $serviceName = 'ViewStat';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}



	public function SearchViewCount($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function InsertViewLog($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetUserViewCount($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}