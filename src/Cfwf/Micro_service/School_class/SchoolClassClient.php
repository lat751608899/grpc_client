<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_class;

/**
 */
class SchoolClassClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取学校班级(分页返回)
     * @param \Cfwf\Micro_service\School_class\SearchSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchSchoolClass(\Cfwf\Micro_service\School_class\SearchSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/SearchSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\School_class\SearchSchoolClassResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某班级信息
     * @param \Cfwf\Micro_service\School_class\GetSchoolClassInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolClassInfo(\Cfwf\Micro_service\School_class\GetSchoolClassInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/GetSchoolClassInfo',
        $argument,
        ['\Cfwf\Micro_service\School_class\GetSchoolClassInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某班级信息
     * @param \Cfwf\Micro_service\School_class\GetSchoolClassInfoByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSchoolClassInfoById(\Cfwf\Micro_service\School_class\GetSchoolClassInfoByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/GetSchoolClassInfoById',
        $argument,
        ['\Cfwf\Micro_service\School_class\GetSchoolClassInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建班级
     * @param \Cfwf\Micro_service\School_class\CreateSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateSchoolClass(\Cfwf\Micro_service\School_class\CreateSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/CreateSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\School_class\CreateSchoolClassResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量创建班级
     * @param \Cfwf\Micro_service\School_class\BatchCreateSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateSchoolClass(\Cfwf\Micro_service\School_class\BatchCreateSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/BatchCreateSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\School_class\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除班级
     * @param \Cfwf\Micro_service\School_class\RemoveSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveSchoolClass(\Cfwf\Micro_service\School_class\RemoveSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/RemoveSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\School_class\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 归档班级 ArchiveSchoolClass
     * @param \Cfwf\Micro_service\School_class\ArchiveSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ArchiveSchoolClass(\Cfwf\Micro_service\School_class\ArchiveSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/ArchiveSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\School_class\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置班主任
     * @param \Cfwf\Micro_service\School_class\SetSchoolClassTeacherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSchoolClassTeacher(\Cfwf\Micro_service\School_class\SetSchoolClassTeacherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/SetSchoolClassTeacher',
        $argument,
        ['\Cfwf\Micro_service\School_class\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某用户为班主任的班级
     * @param \Cfwf\Micro_service\School_class\SearchClassByHeadTeacherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchClassByHeadTeacher(\Cfwf\Micro_service\School_class\SearchClassByHeadTeacherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_class.SchoolClass/SearchClassByHeadTeacher',
        $argument,
        ['\Cfwf\Micro_service\School_class\SearchClassByHeadTeacherResponse', 'decode'],
        $metadata, $options);
    }

}
