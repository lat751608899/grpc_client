<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_student.proto

namespace Cfwf\Micro_service\School_student;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *获取班级内学生人数
 *
 * Generated from protobuf message <code>cfwf.micro_service.school_student.GetStudentCountRequest</code>
 */
class GetStudentCountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 schoolid = 1;</code>
     */
    private $schoolid = 0;
    /**
     * Generated from protobuf field <code>repeated fixed64 classids = 2;</code>
     */
    private $classids;

    public function __construct() {
        \GPBMetadata\SchoolStudent::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 schoolid = 1;</code>
     * @return int|string
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     * Generated from protobuf field <code>fixed64 schoolid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSchoolid($var)
    {
        GPBUtil::checkUint64($var);
        $this->schoolid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 classids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClassids()
    {
        return $this->classids;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 classids = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClassids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->classids = $arr;

        return $this;
    }

}

