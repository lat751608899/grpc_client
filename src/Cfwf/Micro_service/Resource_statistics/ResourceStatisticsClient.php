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
     * ************************
     * 获取统计总数：学校数、用户数、视频数、文章数
     * ***********************
     * @param \Cfwf\Micro_service\Resource_statistics\GetResourceCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetResourceCount(\Cfwf\Micro_service\Resource_statistics\GetResourceCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetResourceCount',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetResourceCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 用户统计数据
     * ***********************
     *
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
     * 活跃用户统计数据（用户->用户数据 第一期）
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
     * 日活跃平均数（用户->用户数据 第一期）
     * @param \Cfwf\Micro_service\Resource_statistics\GetDayActiveUserStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDayActiveUserStatistics(\Cfwf\Micro_service\Resource_statistics\GetDayActiveUserStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetDayActiveUserStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetDayActiveUserStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 新增用户统计数据（用户->用户数据 第一期）
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
     * 留存用户统计数据（用户->用户数据 第一期）
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
     * 微课日均播放数据
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeDayViewStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolWeikeDayViewStatistics(\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeDayViewStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolWeikeDayViewStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolWeikeDayViewStatisticsResponse', 'decode'],
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

    /**
     * 课堂实录日均播放数据
     * @param \Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoDayViewStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolCourseVideoDayViewStatistics(\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoDayViewStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetSchoolCourseVideoDayViewStatistics',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetSchoolCourseVideoDayViewStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ************************
     * 教育云网站-数据统计
     * ***********************
     *
     * 首页，站点数据
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatHomePageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatHomePage(\Cfwf\Micro_service\Resource_statistics\GetWebStatHomePageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatHomePage',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatHomePageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "全部"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysAll(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysAllRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysAll',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysAllResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "理论研究"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTheoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysTheory(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTheoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysTheory',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTheoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "教学资源"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTeachResourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysTeachResource(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTeachResourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysTeachResource',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysTeachResourceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "视频"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysVideo(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysVideo',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "直播"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysBroadcastRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysBroadcast(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysBroadcastRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysBroadcast',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysBroadcastResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "课堂评课"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysPingKeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysPingKe(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysPingKeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysPingKe',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysPingKeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入市id，获取统计数据 "协作组"， 返回 区县列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatCountysXieZuoZuRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatCountysXieZuoZu(\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysXieZuoZuRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatCountysXieZuoZu',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatCountysXieZuoZuResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "全部"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsAll(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsAllRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsAll',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsAllResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "理论研究"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTheoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsTheory(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTheoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsTheory',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTheoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "教学资源"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTeachResourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsTeachResource(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTeachResourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsTeachResource',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsTeachResourceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "视频"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsVideo(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsVideo',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "直播"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsBroadcastRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsBroadcast(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsBroadcastRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsBroadcast',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsBroadcastResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "课堂评课"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsPingKeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsPingKe(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsPingKeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsPingKe',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsPingKeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入区县id，获取统计数据 "协作组"， 返回 学校列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsXieZuoZuRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatSchoolsXieZuoZu(\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsXieZuoZuRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatSchoolsXieZuoZu',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatSchoolsXieZuoZuResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入学校id，获取统计数据 "理论研究"， 返回 教师列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTheoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatTeachersTheory(\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTheoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatTeachersTheory',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTheoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入学校id，获取统计数据 "教学资源"， 返回 教师列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTeachResourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatTeachersTeachResource(\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTeachResourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatTeachersTeachResource',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersTeachResourceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入学校id，获取统计数据 "视频"， 返回 教师列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatTeachersVideo(\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatTeachersVideo',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 传入学校id，获取统计数据 "教研行动"， 返回 教师列表
     * @param \Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersResearchActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWebStatTeachersResearchAction(\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersResearchActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.resource_statistics.ResourceStatistics/GetWebStatTeachersResearchAction',
        $argument,
        ['\Cfwf\Micro_service\Resource_statistics\GetWebStatTeachersResearchActionResponse', 'decode'],
        $metadata, $options);
    }

}
