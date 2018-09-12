<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Monitor
{
	public $client;
	public $packageName = 'cfwf.micro_service.monitor';
	public $serviceName = 'Monitor';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function GetMicroServiceAddress($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetDatabaseServerAddress($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetRabbitMqServerAddress($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetRedisServerAddress($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function ReportRunStatus($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function PublishNewClientVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function ModifyClientVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CancelClientVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function DeleteClientVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetClientVersionList($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function AddClientVersionDownloadCount($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetCurrentClientVersion($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetUpgradeFileList($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}