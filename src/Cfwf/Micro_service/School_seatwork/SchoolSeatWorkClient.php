<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_seatwork;

/**
 */
class SchoolSeatWorkClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 搜索，获取随堂检测列表
     * @param \Cfwf\Micro_service\School_seatwork\SearchSeatWorksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchSeatWorks(\Cfwf\Micro_service\School_seatwork\SearchSeatWorksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/SearchSeatWorks',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\SearchSeatWorksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发随堂作业
     * @param \Cfwf\Micro_service\School_seatwork\SendSeatWorkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendSeatWork(\Cfwf\Micro_service\School_seatwork\SendSeatWorkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/SendSeatWork',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\SendSeatWorkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除随堂作业
     * @param \Cfwf\Micro_service\School_seatwork\DeleteSeatWorkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteSeatWork(\Cfwf\Micro_service\School_seatwork\DeleteSeatWorkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/DeleteSeatWork',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\DeleteSeatWorkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获得随机作业题: 应转移到专门的“题库”微服务中
     * @param \Cfwf\Micro_service\School_seatwork\GetRandSeatWorkQeustionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRandSeatWorkQeustions(\Cfwf\Micro_service\School_seatwork\GetRandSeatWorkQeustionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/GetRandSeatWorkQeustions',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\GetRandSeatWorkQeustionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 开始答题，获取题目列表
     * @param \Cfwf\Micro_service\School_seatwork\BeginSeatWorkTestingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BeginSeatWorkTesting(\Cfwf\Micro_service\School_seatwork\BeginSeatWorkTestingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/BeginSeatWorkTesting',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\BeginSeatWorkTestingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 提交测试题答案
     * @param \Cfwf\Micro_service\School_seatwork\SubmitMySeatWorkTestingAnswersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubmitMySeatWorkTestingAnswers(\Cfwf\Micro_service\School_seatwork\SubmitMySeatWorkTestingAnswersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_seatwork.SchoolSeatWork/SubmitMySeatWorkTestingAnswers',
        $argument,
        ['\Cfwf\Micro_service\School_seatwork\SubmitMySeatWorkTestingAnswersResponse', 'decode'],
        $metadata, $options);
    }

}
