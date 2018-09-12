<?php

namespace GrpcServer\server;

use GrpcServer\ClientFactory;

class Yunpan
{
	public $client;
	public $packageName = 'cfwf.micro_service.yunpan';
	public $serviceName = 'YunPan';

	public function __construct()
	{
		$this->client = ClientFactory::createClient($this->packageName.'.'.$this->serviceName);
	}

	public function __call($method,$option)
	{
		return call_user_func_array([$this->client,$method],$option);
	}

	public function GetUserSpace($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetUserSpace($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SearchFileWhenBeginUpload($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetUploadingFileInfo($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetFileUploadedAndBeloneTo($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetWaittingPreprocessFileList($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetFilePreprocessFinish($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetWaittingStorageFileList($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetFileStorageFinish($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetPicFileStorageFinish($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetPicFileThumbnailTypeList($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function AddPicFileThumbnailType($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetDefaultPicFileThumbnailType($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function SetDefaultPicFileThumbnailType($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	

	public function GetResFileInfo($where)
	{
		return $this->client->where($where)->getResponse(explode("::",__METHOD__)[1]);
	}
	
}