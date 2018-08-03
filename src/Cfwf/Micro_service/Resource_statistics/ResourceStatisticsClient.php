<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Resource_statistics;

/**
 */
class ResourceStatisticsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 用户总数（用户->全部用户->总数  第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetUserCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserCount(\Cfwf\Micro_service\Resource_statistics\GetUserCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetUserCount',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetUserCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户列表（用户->全部用户->列表）
     * @param \Cfwf\Micro_service\Resource_statistics\GetUserListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserList(\Cfwf\Micro_service\Resource_statistics\GetUserListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetUserList',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetUserListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取用户详情（用户->用户详情）
     * @param \Cfwf\Micro_service\Resource_statistics\GetUserInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserInfo(\Cfwf\Micro_service\Resource_statistics\GetUserInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetUserInfo',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetUserInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 活跃用户统计数据（用户->用户统计 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetActiveUserStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetActiveUserStatistics(\Cfwf\Micro_service\Resource_statistics\GetActiveUserStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetActiveUserStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetActiveUserStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 新增用户统计数据（用户->用户统计 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetNewUserStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNewUserStatistics(\Cfwf\Micro_service\Resource_statistics\GetNewUserStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetNewUserStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetNewUserStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 留存用户统计数据（用户->用户统计 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetRemainUserStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRemainUserStatistics(\Cfwf\Micro_service\Resource_statistics\GetRemainUserStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetRemainUserStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetRemainUserStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 学校统计数据
     * ***********************
     *
     * 获取学校总数（学校->全部学校->总数 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolCount(\Cfwf\Micro_service\Resource_statistics\GetSchoolCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolCount',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校列表（学校->全部学校->列表）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolList(\Cfwf\Micro_service\Resource_statistics\GetSchoolListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolList',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校详情（学校->学校详情->基本信息）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolInfo(\Cfwf\Micro_service\Resource_statistics\GetSchoolInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolInfo',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校成员列表（学校->学校详情->用户列表）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolUserListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolUserList(\Cfwf\Micro_service\Resource_statistics\GetSchoolUserListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolUserList',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolUserListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校管理员列表（学校->学校详情->学校管理员）
     * 待完善 rpc GetSchoolManagerList (GetSchoolManagerListRequest) returns (GetSchoolManagerListResponse) {}
     *
     * 获取学校资源列表（学校->学校详情->学校资源）
     * 待完善 rpc GetSchoolResourceList (GetSchoolResourceListRequest) returns (GetSchoolResourceListResponse) {}
     *
     * 获取学校数据（学校->学校详情->学校数据）
     * 待完善 rpc GetSchoolData (GetSchoolDataRequest) returns (GetSchoolDataResponse) {}
     *
     * 获取省市区县统计信息(学校->地图->全国、省市、区县  第一期) 
     * @param \Cfwf\Micro_service\Resource_statistics\GetCityStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCityStatistics(\Cfwf\Micro_service\Resource_statistics\GetCityStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetCityStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetCityStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校统计信息(学校->地图->学校  第一期) 
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolStatistics(\Cfwf\Micro_service\Resource_statistics\GetSchoolStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 微课统计数据
     * ***********************
     *
     * 获取微课总数（微课->全部微课->总数 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolWeikeCount(\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolWeikeCount',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取微课列表 到 school_weike 微服务去请求
     *
     * 获取微课详情（微课->微课详情）
     * 待完善 rpc GetSchoolWeikeInfo (GetSchoolWeikeInfoRequest) returns (GetSchoolWeikeInfoResponse) {}  
     *
     * 新增微课统计数据（微课->微课数据->新增微课 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetNewSchoolWeikeStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNewSchoolWeikeStatistics(\Cfwf\Micro_service\Resource_statistics\GetNewSchoolWeikeStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetNewSchoolWeikeStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetNewSchoolWeikeStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微课播放统计数据（微课->微课数据->微课播放 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeViewStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolWeikeViewStatistics(\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeViewStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolWeikeViewStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeViewStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 课堂实录统计数据
     * ***********************
     *
     * 获取课堂实录总数（课堂实录->全部课堂实录->总数 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolCourseVideoCount(\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolCourseVideoCount',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取课堂实录列表 到 school_course_video 微服务去请求
     *
     * 获取课堂实录详情（课堂实录->课堂实录详情）
     * 待完善 rpc GetSchoolCourseVideokeInfo (GetSchoolCourseVideokeInfoRequest) returns (GetSchoolCourseVideokeInfoResponse) {}  
     *
     * 新增课堂实录统计数据（课堂实录->课堂实录数据->新增课堂实录 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetNewSchoolCourseVideoStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNewSchoolCourseVideoStatistics(\Cfwf\Micro_service\Resource_statistics\GetNewSchoolCourseVideoStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetNewSchoolCourseVideoStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetNewSchoolCourseVideoStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 课堂实录播放统计数据（课堂实录->课堂实录数据->课堂实录播放 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoViewStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolCourseVideoViewStatistics(\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoViewStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolCourseVideoViewStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoViewStatisticsResponse', 'decode'],
        $metadata, $options);
    }

}
