<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_student;

/**
 */
class SchoolStudentClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取学生申请列表(分页返回)
     * @param \Cfwf\Micro_service\School_student\SearchStudentApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchStudentApply(\Cfwf\Micro_service\School_student\SearchStudentApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/SearchStudentApply',
        $argument,
        ['\Cfwf\Micro_service\School_student\SearchStudentApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批准或拒绝 学生申请
     * @param \Cfwf\Micro_service\School_student\ApproveStudentApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApproveStudentApply(\Cfwf\Micro_service\School_student\ApproveStudentApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/ApproveStudentApply',
        $argument,
        ['\Cfwf\Micro_service\School_student\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量批准或拒绝 学生申请
     * @param \Cfwf\Micro_service\School_student\BatchApproveStudentApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchApproveStudentApply(\Cfwf\Micro_service\School_student\BatchApproveStudentApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/BatchApproveStudentApply',
        $argument,
        ['\Cfwf\Micro_service\School_student\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 学生提交入校/入班 申请：如果之前学生已经提交过申请，则新申请信息会覆盖原申请信息
     * @param \Cfwf\Micro_service\School_student\StudentApplyInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StudentSubmitApply(\Cfwf\Micro_service\School_student\StudentApplyInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/StudentSubmitApply',
        $argument,
        ['\Cfwf\Micro_service\School_student\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取学生列表(分页返回)
     * @param \Cfwf\Micro_service\School_student\SearchStudentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchStudent(\Cfwf\Micro_service\School_student\SearchStudentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/SearchStudent',
        $argument,
        ['\Cfwf\Micro_service\School_student\SearchStudentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某学生信息
     * @param \Cfwf\Micro_service\School_student\GetStudentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetStudentInfo(\Cfwf\Micro_service\School_student\GetStudentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/GetStudentInfo',
        $argument,
        ['\Cfwf\Micro_service\School_student\GetStudentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取某学生信息和申请信息
     * @param \Cfwf\Micro_service\School_student\GetStudentStatusInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetStudentStatusInfo(\Cfwf\Micro_service\School_student\GetStudentStatusInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/GetStudentStatusInfo',
        $argument,
        ['\Cfwf\Micro_service\School_student\GetStudentStatusInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置学生信息。不通过审批，直接设置学生所属班级，用户批量注册
     * @param \Cfwf\Micro_service\School_student\SetStudentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetStudentInfo(\Cfwf\Micro_service\School_student\SetStudentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/SetStudentInfo',
        $argument,
        ['\Cfwf\Micro_service\School_student\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 从学校内移除学生。
     * @param \Cfwf\Micro_service\School_student\RemoveStudentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveStudent(\Cfwf\Micro_service\School_student\RemoveStudentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_student.SchoolStudent/RemoveStudent',
        $argument,
        ['\Cfwf\Micro_service\School_student\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
