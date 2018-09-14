<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Resource_statistics
{
	public $client;
	public $packageName = 'cfwf.micro_service.resource_statistics';
	public $serviceName = 'ResourceStatistics';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function GetResourceCount()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetUserList()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetUserInfo()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetActiveUserStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetDayActiveUserStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetNewUserStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetRemainUserStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolList()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolInfo()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolUserList()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetCityStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolWeikeCount()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetNewSchoolWeikeStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolWeikeViewStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolWeikeDayViewStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolCourseVideoCount()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetNewSchoolCourseVideoStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolCourseVideoViewStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	

	public function GetSchoolCourseVideoDayViewStatistics()
	{
		$method = explode("::",__METHOD__)[1];
        $args = func_get_args();

        return call_user_func_array([$this->client,$method], $args);
	}
	
}