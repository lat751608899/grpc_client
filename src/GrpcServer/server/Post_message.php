<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Post_message
{
	public $client;
	public $packageName = 'cfwf.micro_service.post_message';
	public $serviceName = 'PostMessageProxy';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function PostCommonMessageToUsers($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PostCommonMessageToSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PostCommonMessageToCooperativeGroup($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PostCounterMessageToUsers($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PostCounterMessageToSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PostCounterMessageToCooperativeGroup($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}