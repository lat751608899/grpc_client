<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Sms
{
	public $client;
	public $packageName = 'cfwf.micro_service.sms';
	public $serviceName = 'SMS';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function SendVerificationCode()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function CheckVerificationCode()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	
}