<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class School_subject
{
	public $client;
	public $packageName = 'cfwf.micro_service.school_subject';
	public $serviceName = 'SchoolSubject';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function GetTextbookVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetTextbookCatalogue($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}