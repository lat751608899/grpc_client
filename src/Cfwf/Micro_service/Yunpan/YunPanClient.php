<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Yunpan;

/**
 */
class YunPanClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取用户空间大小和已用大小
     * @param \Cfwf\Micro_service\Yunpan\GetUserSpaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserSpace(\Cfwf\Micro_service\Yunpan\GetUserSpaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetUserSpace',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetUserSpaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置用户空间大小
     * @param \Cfwf\Micro_service\Yunpan\SetUserSpaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserSpace(\Cfwf\Micro_service\Yunpan\SetUserSpaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SetUserSpace',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 文件上传过程： 上传、预处理、存库
     * ***********************
     *
     * 根据文件特征查询文件，用于在开始上传时检查断点续传
     * @param \Cfwf\Micro_service\Yunpan\SearchFileInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchFileInfo(\Cfwf\Micro_service\Yunpan\SearchFileInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SearchFileInfo',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\SearchFileInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 保存正在上传的文件信息。由文件上传服务器调用，在文件上传中断和完成时时会调用
     * @param \Cfwf\Micro_service\Yunpan\SetUploadingFileInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUploadingFileInfo(\Cfwf\Micro_service\Yunpan\SetUploadingFileInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SetUploadingFileInfo',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取待预处理的文件，并将其设为“正在进行预处理”的状态。 预处理完成后，进行预处理的程序将文件保存到fastdfs
     * @param \Cfwf\Micro_service\Yunpan\GetWaitingPreprocessFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWaitingPreprocessFile(\Cfwf\Micro_service\Yunpan\GetWaitingPreprocessFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetWaitingPreprocessFile',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetWaitingPreprocessFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置文件的fastdfs_id， 由文件存储服务器在保存文件到fastdfs成功时调用
     * @param \Cfwf\Micro_service\Yunpan\SetFileStorageFinishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetFileStorageFinish(\Cfwf\Micro_service\Yunpan\SetFileStorageFinishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SetFileStorageFinish',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置图片文件的fastdfs_id， 由文件存储服务器在保存图片到fastdfs成功时调用
     * @param \Cfwf\Micro_service\Yunpan\SetPicFileStorageFinishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetPicFileStorageFinish(\Cfwf\Micro_service\Yunpan\SetPicFileStorageFinishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SetPicFileStorageFinish',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 图片文件在存入fastdfs之前进行缩略图处理
     * ***********************
     *
     * 获取 缩略图 处理类型列表
     * @param \Cfwf\Micro_service\Yunpan\GetPicFileThumbnailTypeListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPicFileThumbnailTypeList(\Cfwf\Micro_service\Yunpan\GetPicFileThumbnailTypeListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetPicFileThumbnailTypeList',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetPicFileThumbnailTypeListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加 缩略图 处理方式。此时PicFileThumbnailInfo中的 id将被忽略。 为保存已处理过的文件的信息，只能增加，不能修改。 CommonResponse中的 msg 保存新生成的id（如果存在相同处理类型，将不新增，并返回对应的id）
     * @param \Cfwf\Micro_service\Yunpan\AddPicFileThumbnailTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddPicFileThumbnailType(\Cfwf\Micro_service\Yunpan\AddPicFileThumbnailTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/AddPicFileThumbnailType',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某种类型的图片文件的默认处理方式
     * @param \Cfwf\Micro_service\Yunpan\GetDefaultPicFileThumbnailTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDefaultPicFileThumbnailType(\Cfwf\Micro_service\Yunpan\GetDefaultPicFileThumbnailTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetDefaultPicFileThumbnailType',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetDefaultPicFileThumbnailTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置某种类型的图片文件的默认处理方式
     * @param \Cfwf\Micro_service\Yunpan\SetDefaultPicFileThumbnailTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetDefaultPicFileThumbnailType(\Cfwf\Micro_service\Yunpan\SetDefaultPicFileThumbnailTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/SetDefaultPicFileThumbnailType',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 获取文件信息(包括下载地址信息)
     * ***********************
     * @param \Cfwf\Micro_service\Yunpan\GetResFileInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetResFileInfo(\Cfwf\Micro_service\Yunpan\GetResFileInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetResFileInfo',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetResFileInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cfwf\Micro_service\Yunpan\GetResFileUrlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetResFileUrl(\Cfwf\Micro_service\Yunpan\GetResFileUrlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.yunpan.YunPan/GetResFileUrl',
        $argument,
        ['\Cfwf\Micro_service\Yunpan\GetResFileUrlResponse', 'decode'],
        $metadata, $options);
    }

}
