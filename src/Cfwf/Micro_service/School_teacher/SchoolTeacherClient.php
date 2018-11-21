<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_teacher;

/**
 */
class SchoolTeacherClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取老师申请列表(分页返回)
     * @param \Cfwf\Micro_service\School_teacher\SearchTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchTeacherApply(\Cfwf\Micro_service\School_teacher\SearchTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/SearchTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\SearchTeacherApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某老师的申请信息
     * @param \Cfwf\Micro_service\School_teacher\GetTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTeacherApply(\Cfwf\Micro_service\School_teacher\GetTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/GetTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\GetTeacherApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批准老师申请
     * @param \Cfwf\Micro_service\School_teacher\ApproveTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApproveTeacherApply(\Cfwf\Micro_service\School_teacher\ApproveTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/ApproveTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 拒绝老师申请
     * @param \Cfwf\Micro_service\School_teacher\RejectTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RejectTeacherApply(\Cfwf\Micro_service\School_teacher\RejectTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/RejectTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量批准老师申请
     * @param \Cfwf\Micro_service\School_teacher\BatchSchoolTeacherApply $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchApproveTeacherApply(\Cfwf\Micro_service\School_teacher\BatchSchoolTeacherApply $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/BatchApproveTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量拒绝老师申请
     * @param \Cfwf\Micro_service\School_teacher\BatchSchoolTeacherApply $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchRejectTeacherApply(\Cfwf\Micro_service\School_teacher\BatchSchoolTeacherApply $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/BatchRejectTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 老师提交入校申请：如果之前老师已经提交过对该学校的申请，则新申请信息会覆盖原申请信息
     * @param \Cfwf\Micro_service\School_teacher\TeacherApplyInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TeacherSubmitApply(\Cfwf\Micro_service\School_teacher\TeacherApplyInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/TeacherSubmitApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取老师列表(分页返回)
     * @param \Cfwf\Micro_service\School_teacher\SearchTeacherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchTeacher(\Cfwf\Micro_service\School_teacher\SearchTeacherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/SearchTeacher',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\SearchTeacherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某老师信息
     * @param \Cfwf\Micro_service\School_teacher\GetTeacherInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTeacherInfo(\Cfwf\Micro_service\School_teacher\GetTeacherInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/GetTeacherInfo',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\GetTeacherInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置学校审批老师申请的方式：自动同意还是人工审核。未设置的学校默认人工审核
     * @param \Cfwf\Micro_service\School_teacher\SetApprovePatternsForTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetApprovePatternsForTeacherApply(\Cfwf\Micro_service\School_teacher\SetApprovePatternsForTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/SetApprovePatternsForTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学校审批老师申请的方式
     * @param \Cfwf\Micro_service\School_teacher\GetApprovePatternsForTeacherApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetApprovePatternsForTeacherApply(\Cfwf\Micro_service\School_teacher\GetApprovePatternsForTeacherApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/GetApprovePatternsForTeacherApply',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\GetApprovePatternsForTeacherApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置老师任课信息
     * @param \Cfwf\Micro_service\School_teacher\SetTeacherClassInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetTeacherClassInfo(\Cfwf\Micro_service\School_teacher\SetTeacherClassInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/SetTeacherClassInfo',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\SetTeacherClassInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置老师任课信息
     * @param \Cfwf\Micro_service\School_teacher\SetTeacherClassInfoByJsonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetTeacherClassInfoByJson(\Cfwf\Micro_service\School_teacher\SetTeacherClassInfoByJsonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/SetTeacherClassInfoByJson',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\SetTeacherClassInfoByJsonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置老师所属学校信息。如果老师已属于其他学校，且全局设置中老师只能属于一个学校时，退出原学校
     * @param \Cfwf\Micro_service\School_teacher\AddTeacherToSchoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddTeacherToSchool(\Cfwf\Micro_service\School_teacher\AddTeacherToSchoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/AddTeacherToSchool',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 从学校内移除老师
     * @param \Cfwf\Micro_service\School_teacher\RemoveTeacherFromSchoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveTeacherFromSchool(\Cfwf\Micro_service\School_teacher\RemoveTeacherFromSchoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/RemoveTeacherFromSchool',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 将老师从某个班移出
     * @param \Cfwf\Micro_service\School_teacher\RemoveTeacherFromClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveTeacherFromClass(\Cfwf\Micro_service\School_teacher\RemoveTeacherFromClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/RemoveTeacherFromClass',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 移除班级内所有老师
     * @param \Cfwf\Micro_service\School_teacher\RemoveClassTeachersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveClassTeachers(\Cfwf\Micro_service\School_teacher\RemoveClassTeachersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_teacher.SchoolTeacher/RemoveClassTeachers',
        $argument,
        ['\Cfwf\Micro_service\School_teacher\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
