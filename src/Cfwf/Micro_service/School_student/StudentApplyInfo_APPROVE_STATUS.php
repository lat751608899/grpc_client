<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_student.proto

namespace Cfwf\Micro_service\School_student;

/**
 * Protobuf enum <code>Cfwf\Micro_service\School_student\StudentApplyInfo\APPROVE_STATUS</code>
 */
class StudentApplyInfo_APPROVE_STATUS
{
    /**
     *等待审批
     *
     * Generated from protobuf enum <code>APPROVE_STATUS_WAIT = 0;</code>
     */
    const APPROVE_STATUS_WAIT = 0;
    /**
     *人工审批通过
     *
     * Generated from protobuf enum <code>APPROVE_STATUS_PASSED = 1;</code>
     */
    const APPROVE_STATUS_PASSED = 1;
    /**
     *拒绝
     *
     * Generated from protobuf enum <code>APPROVE_STATUS_REFUSED = 2;</code>
     */
    const APPROVE_STATUS_REFUSED = 2;
    /**
     *自动审批通过
     *
     * Generated from protobuf enum <code>APPROVE_STATUS_AUTO_PASSED = 3;</code>
     */
    const APPROVE_STATUS_AUTO_PASSED = 3;
    /**
     *已过期(用户在上个申请未审批前又提交了一次申请，则上个申请将被设为过期)
     *
     * Generated from protobuf enum <code>APPROVE_STATUS_TIMEOUT = 4;</code>
     */
    const APPROVE_STATUS_TIMEOUT = 4;
}

