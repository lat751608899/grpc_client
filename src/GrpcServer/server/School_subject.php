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

	public function GetTextbookVersion()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetTextbookCatalogue()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	
}