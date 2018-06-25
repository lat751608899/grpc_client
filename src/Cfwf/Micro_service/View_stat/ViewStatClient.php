<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\View_stat;

/**
 */
class ViewStatClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取资源观看总数
     * @param \Cfwf\Micro_service\View_stat\SearchViewCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchViewCount(\Cfwf\Micro_service\View_stat\SearchViewCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.view_stat.ViewStat/SearchViewCount',
        $argument,
        ['\Cfwf\Micro_service\View_stat\SearchViewCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加某资源的观看记录
     * @param \Cfwf\Micro_service\View_stat\InsertViewLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertViewLog(\Cfwf\Micro_service\View_stat\InsertViewLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.view_stat.ViewStat/InsertViewLog',
        $argument,
        ['\Cfwf\Micro_service\View_stat\InsertViewLogResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某用户观看某资源次数
     * @param \Cfwf\Micro_service\View_stat\GetUserViewCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserViewCount(\Cfwf\Micro_service\View_stat\GetUserViewCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.view_stat.ViewStat/GetUserViewCount',
        $argument,
        ['\Cfwf\Micro_service\View_stat\GetUserViewCountResponse', 'decode'],
        $metadata, $options);
    }

}
