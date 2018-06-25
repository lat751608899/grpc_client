<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_teacher.proto

namespace Cfwf\Micro_service\School_teacher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *设置老师所属学校信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.school_teacher.AddTeacherToSchoolRequest</code>
 */
class AddTeacherToSchoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *操作者id，必填
     *
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     */
    private $operatorid = 0;
    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_teacher.TeacherInfo teacher_list = 2;</code>
     */
    private $teacher_list;

    public function __construct() {
        \GPBMetadata\SchoolTeacher::initOnce();
        parent::__construct();
    }

    /**
     *操作者id，必填
     *
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @return int|string
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
     *操作者id，必填
     *
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperatorid($var)
    {
        GPBUtil::checkUint64($var);
        $this->operatorid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_teacher.TeacherInfo teacher_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTeacherList()
    {
        return $this->teacher_list;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_teacher.TeacherInfo teacher_list = 2;</code>
     * @param \Cfwf\Micro_service\School_teacher\TeacherInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTeacherList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\School_teacher\TeacherInfo::class);
        $this->teacher_list = $arr;

        return $this;
    }

}

