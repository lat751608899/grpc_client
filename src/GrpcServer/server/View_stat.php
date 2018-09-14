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

	public function SearchViewCount()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function InsertViewLog()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetUserViewCount()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	
}