<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Monitor;

/**
 */
class MonitorClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取微服务地址
     * @param \Cfwf\Micro_service\Monitor\GetMicroServiceAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMicroServiceAddress(\Cfwf\Micro_service\Monitor\GetMicroServiceAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetMicroServiceAddress',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetMicroServiceAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取微服务配置信息
     * @param \Cfwf\Micro_service\Monitor\GetMicroServiceSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMicroServiceSetting(\Cfwf\Micro_service\Monitor\GetMicroServiceSettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetMicroServiceSetting',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetMicroServiceSettingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取数据库连接配置
     * @param \Cfwf\Micro_service\Monitor\GetDatabaseServerAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDatabaseServerAddress(\Cfwf\Micro_service\Monitor\GetDatabaseServerAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetDatabaseServerAddress',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetDatabaseServerAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取rabbitmq连接配置
     * @param \Cfwf\Micro_service\Monitor\GetRabbitMqServerAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRabbitMqServerAddress(\Cfwf\Micro_service\Monitor\GetRabbitMqServerAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetRabbitMqServerAddress',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetRabbitMqServerAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取redis连接配置
     * @param \Cfwf\Micro_service\Monitor\GetRedisServerAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRedisServerAddress(\Cfwf\Micro_service\Monitor\GetRedisServerAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetRedisServerAddress',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetRedisServerAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微服务上报运行状态，同时获取配置信息最新修改时间  
     * @param \Cfwf\Micro_service\Monitor\ReportRunStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReportRunStatus(\Cfwf\Micro_service\Monitor\ReportRunStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/ReportRunStatus',
        $argument,
        ['\Cfwf\Micro_service\Monitor\ReportRunStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 客户端安装包、升级包发布、获取、管理  
     *
     * 发布新版本
     * @param \Cfwf\Micro_service\Monitor\PublishNewClientVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PublishNewClientVersion(\Cfwf\Micro_service\Monitor\PublishNewClientVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/PublishNewClientVersion',
        $argument,
        ['\Cfwf\Micro_service\Monitor\PublishNewClientVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 修改版本
     * @param \Cfwf\Micro_service\Monitor\ModifyClientVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyClientVersion(\Cfwf\Micro_service\Monitor\ModifyClientVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/ModifyClientVersion',
        $argument,
        ['\Cfwf\Micro_service\Monitor\ModifyClientVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 撤销版本
     * @param \Cfwf\Micro_service\Monitor\CancelClientVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelClientVersion(\Cfwf\Micro_service\Monitor\CancelClientVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/CancelClientVersion',
        $argument,
        ['\Cfwf\Micro_service\Monitor\CancelClientVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除版本
     * @param \Cfwf\Micro_service\Monitor\DeleteClientVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteClientVersion(\Cfwf\Micro_service\Monitor\DeleteClientVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/DeleteClientVersion',
        $argument,
        ['\Cfwf\Micro_service\Monitor\DeleteClientVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取版本列表
     * @param \Cfwf\Micro_service\Monitor\GetClientVersionListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetClientVersionList(\Cfwf\Micro_service\Monitor\GetClientVersionListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetClientVersionList',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetClientVersionListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加下载次数
     * @param \Cfwf\Micro_service\Monitor\AddClientVersionDownloadCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddClientVersionDownloadCount(\Cfwf\Micro_service\Monitor\AddClientVersionDownloadCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/AddClientVersionDownloadCount',
        $argument,
        ['\Cfwf\Micro_service\Monitor\AddClientVersionDownloadCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取当前版本信息
     * @param \Cfwf\Micro_service\Monitor\GetCurrentClientVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCurrentClientVersion(\Cfwf\Micro_service\Monitor\GetCurrentClientVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetCurrentClientVersion',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetCurrentClientVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取升级包更新列表
     * @param \Cfwf\Micro_service\Monitor\GetUpgradeFileListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUpgradeFileList(\Cfwf\Micro_service\Monitor\GetUpgradeFileListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.monitor.Monitor/GetUpgradeFileList',
        $argument,
        ['\Cfwf\Micro_service\Monitor\GetUpgradeFileListResponse', 'decode'],
        $metadata, $options);
    }

}
