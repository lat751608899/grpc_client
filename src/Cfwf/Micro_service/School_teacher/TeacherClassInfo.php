<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_teacher.proto

namespace Cfwf\Micro_service\School_teacher;

use Google\Protobuf\Internal\GPBUtil;

/**
 *设置老师任课信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.school_teacher.TeacherClassInfo</code>
 */
class TeacherClassInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 classid = 1;</code>
     */
    private $classid = 0;
    /**
     * Generated from protobuf field <code>int32 grade = 2;</code>
     */
    private $grade = 0;
    /**
     * Generated from protobuf field <code>int32 classno = 3;</code>
     */
    private $classno = 0;
    /**
     *在此班级所教科目，如果教多个科目，此处格式为: 1,2,3
     *
     * Generated from protobuf field <code>string subjectids = 4;</code>
     */
    private $subjectids = '';

    public function __construct() {
        \GPBMetadata\SchoolTeacher::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 classid = 1;</code>
     * @return int|string
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Generated from protobuf field <code>fixed64 classid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClassid($var)
    {
        GPBUtil::checkUint64($var);
        $this->classid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 grade = 2;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>int32 grade = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkInt32($var);
        $this->grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 classno = 3;</code>
     * @return int
     */
    public function getClassno()
    {
        return $this->classno;
    }

    /**
     * Generated from protobuf field <code>int32 classno = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setClassno($var)
    {
        GPBUtil::checkInt32($var);
        $this->classno = $var;

        return $this;
    }

    /**
     *在此班级所教科目，如果教多个科目，此处格式为: 1,2,3
     *
     * Generated from protobuf field <code>string subjectids = 4;</code>
     * @return string
     */
    public function getSubjectids()
    {
        return $this->subjectids;
    }

    /**
     *在此班级所教科目，如果教多个科目，此处格式为: 1,2,3
     *
     * Generated from protobuf field <code>string subjectids = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSubjectids($var)
    {
        GPBUtil::checkString($var, True);
        $this->subjectids = $var;

        return $this;
    }

}

