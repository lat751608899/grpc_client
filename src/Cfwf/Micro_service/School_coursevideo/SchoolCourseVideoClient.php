<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_coursevideo;

/**
 */
class SchoolCourseVideoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取课堂实录列表
     * @param \Cfwf\Micro_service\School_coursevideo\SearchCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchCourseVideo(\Cfwf\Micro_service\School_coursevideo\SearchCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/SearchCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\SearchCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除课堂实录
     * @param \Cfwf\Micro_service\School_coursevideo\DeleteCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCourseVideo(\Cfwf\Micro_service\School_coursevideo\DeleteCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/DeleteCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\DeleteCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取课堂实录审核列表(学校查询调用)
     * @param \Cfwf\Micro_service\School_coursevideo\SearchApplyCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchApplyCourseVideo(\Cfwf\Micro_service\School_coursevideo\SearchApplyCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/SearchApplyCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\SearchApplyCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 处理课堂实录审核
     * @param \Cfwf\Micro_service\School_coursevideo\ApproveCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApproveCourseVideo(\Cfwf\Micro_service\School_coursevideo\ApproveCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/ApproveCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\ApproveCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取课程信息
     * @param \Cfwf\Micro_service\School_coursevideo\GetCourseVideoInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCourseVideoInfo(\Cfwf\Micro_service\School_coursevideo\GetCourseVideoInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/GetCourseVideoInfo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\GetCourseVideoInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 新增课堂实录
     * @param \Cfwf\Micro_service\School_coursevideo\InsertCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertCourseVideo(\Cfwf\Micro_service\School_coursevideo\InsertCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/InsertCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\InsertCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 观看课堂实录，增加观看数
     * @param \Cfwf\Micro_service\School_coursevideo\ViewCourseVideoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ViewCourseVideo(\Cfwf\Micro_service\School_coursevideo\ViewCourseVideoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_coursevideo.SchoolCourseVideo/ViewCourseVideo',
        $argument,
        ['\Cfwf\Micro_service\School_coursevideo\ViewCourseVideoResponse', 'decode'],
        $metadata, $options);
    }

}
