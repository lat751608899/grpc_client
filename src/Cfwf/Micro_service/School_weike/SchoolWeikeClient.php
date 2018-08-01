<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_weike;

/**
 */
class SchoolWeikeClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取微课列表
     * @param \Cfwf\Micro_service\School_weike\GetWeikeListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWeikeList(\Cfwf\Micro_service\School_weike\GetWeikeListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetWeikeList',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetWeikeListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取班级微课列表
     * @param \Cfwf\Micro_service\School_weike\GetClassWeikeListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetClassWeikeList(\Cfwf\Micro_service\School_weike\GetClassWeikeListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetClassWeikeList',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetClassWeikeListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某个班级的一个班级微课详细观看记录
     * @param \Cfwf\Micro_service\School_weike\GetClassWeikeViewListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetClassWeikeViewList(\Cfwf\Micro_service\School_weike\GetClassWeikeViewListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetClassWeikeViewList',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetClassWeikeViewListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某个微课在各个班的观看总人数
     * @param \Cfwf\Micro_service\School_weike\GetClassWeikeViewCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetClassWeikeViewCount(\Cfwf\Micro_service\School_weike\GetClassWeikeViewCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetClassWeikeViewCount',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetClassWeikeViewCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除微课
     * @param \Cfwf\Micro_service\School_weike\DeleteWeikeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteWeike(\Cfwf\Micro_service\School_weike\DeleteWeikeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/DeleteWeike',
        $argument,
        ['\Cfwf\Micro_service\School_weike\DeleteWeikeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取微课审核列表
     * @param \Cfwf\Micro_service\School_weike\GetApplyListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetApplyList(\Cfwf\Micro_service\School_weike\GetApplyListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetApplyList',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetApplyListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 处理微课审核
     * @param \Cfwf\Micro_service\School_weike\DealWeikeApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DealWeikeApply(\Cfwf\Micro_service\School_weike\DealWeikeApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/DealWeikeApply',
        $argument,
        ['\Cfwf\Micro_service\School_weike\DealWeikeApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取微课信息
     * @param \Cfwf\Micro_service\School_weike\GetWeikeInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWeikeInfo(\Cfwf\Micro_service\School_weike\GetWeikeInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetWeikeInfo',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetWeikeInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 自己班学生观看微课 本班学生观看会进行积分统计，ViewWeike接口则不进行积分统计
     * @param \Cfwf\Micro_service\School_weike\ViewWeikeByClassStudentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ViewWeikeByClassStudent(\Cfwf\Micro_service\School_weike\ViewWeikeByClassStudentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/ViewWeikeByClassStudent',
        $argument,
        ['\Cfwf\Micro_service\School_weike\ViewWeikeByClassStudentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发布微课
     * @param \Cfwf\Micro_service\School_weike\InsertWeikeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertWeike(\Cfwf\Micro_service\School_weike\InsertWeikeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/InsertWeike',
        $argument,
        ['\Cfwf\Micro_service\School_weike\InsertWeikeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某个微课在哪些班级发布了
     * @param \Cfwf\Micro_service\School_weike\GetClassidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetClassid(\Cfwf\Micro_service\School_weike\GetClassidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetClassid',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetClassidResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 非本班学生观看微课
     * @param \Cfwf\Micro_service\School_weike\ViewWeikeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ViewWeike(\Cfwf\Micro_service\School_weike\ViewWeikeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/ViewWeike',
        $argument,
        ['\Cfwf\Micro_service\School_weike\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量获取班级微课数量
     * @param \Cfwf\Micro_service\School_weike\GetSchoolWeikeCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolWeikeCount(\Cfwf\Micro_service\School_weike\GetSchoolWeikeCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_weike.SchoolWeike/GetSchoolWeikeCount',
        $argument,
        ['\Cfwf\Micro_service\School_weike\GetSchoolWeikeCountResponse', 'decode'],
        $metadata, $options);
    }

}
