<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class School_class
{
	public $client;
	public $packageName = 'cfwf.micro_service.school_class';
	public $serviceName = 'SchoolClass';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function SearchSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetSchoolClassInfo($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetSchoolClassesInfo($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetSchoolClassInfoById($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetSchoolClassesInfoById($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function CreateSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function BatchCreateSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function RemoveSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function ArchiveSchoolClass($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetSchoolClassTeacher($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function ClearSchoolClassTeacher($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SearchClassByHeadTeacher($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}