<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_student.proto

namespace Cfwf\Micro_service\School_student;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *获取学生信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.school_student.GetStudentInfoRequest</code>
 */
class GetStudentInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *学生id，必填
     *
     * Generated from protobuf field <code>repeated fixed64 studentid = 1;</code>
     */
    private $studentid;

    public function __construct() {
        \GPBMetadata\SchoolStudent::initOnce();
        parent::__construct();
    }

    /**
     *学生id，必填
     *
     * Generated from protobuf field <code>repeated fixed64 studentid = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStudentid()
    {
        return $this->studentid;
    }

    /**
     *学生id，必填
     *
     * Generated from protobuf field <code>repeated fixed64 studentid = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStudentid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->studentid = $arr;

        return $this;
    }

}

