<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_student.proto

namespace Cfwf\Micro_service\School_student;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_student.StudentApplyInfo</code>
 */
class StudentApplyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *学校id
     *
     * Generated from protobuf field <code>fixed64 schoolid = 2;</code>
     */
    private $schoolid = 0;
    /**
     *如果指定了classid，则忽略 grade_year 、grade、class_no
     *
     * Generated from protobuf field <code>fixed64 classid = 3;</code>
     */
    private $classid = 0;
    /**
     *学段： 1=小 2=初 3=高
     *
     * Generated from protobuf field <code>int32 period = 4;</code>
     */
    private $period = 0;
    /**
     *学届。如果指定了 period 和 grade_year，则忽略 grade
     *
     * Generated from protobuf field <code>int32 grade_year = 5;</code>
     */
    private $grade_year = 0;
    /**
     *年级
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
     */
    private $grade = 0;
    /**
     *班级序号
     *
     * Generated from protobuf field <code>int32 class_no = 7;</code>
     */
    private $class_no = 0;
    /**
     *姓名
     *
     * Generated from protobuf field <code>string username = 8;</code>
     */
    private $username = '';
    /**
     *性别
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.USER_SEX sex = 9;</code>
     */
    private $sex = 0;
    /**
     *申请时间，格式： yyyy-mm-dd hh:nn:ss
     *
     * Generated from protobuf field <code>string submit_time = 10;</code>
     */
    private $submit_time = '';
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.StudentApplyInfo.APPROVE_STATUS status = 11;</code>
     */
    private $status = 0;

    public function __construct() {
        \GPBMetadata\SchoolStudent::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkUint64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     *学校id
     *
     * Generated from protobuf field <code>fixed64 schoolid = 2;</code>
     * @return int|string
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     *学校id
     *
     * Generated from protobuf field <code>fixed64 schoolid = 2;</code>
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
     *如果指定了classid，则忽略 grade_year 、grade、class_no
     *
     * Generated from protobuf field <code>fixed64 classid = 3;</code>
     * @return int|string
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     *如果指定了classid，则忽略 grade_year 、grade、class_no
     *
     * Generated from protobuf field <code>fixed64 classid = 3;</code>
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
     *学段： 1=小 2=初 3=高
     *
     * Generated from protobuf field <code>int32 period = 4;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     *学段： 1=小 2=初 3=高
     *
     * Generated from protobuf field <code>int32 period = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkInt32($var);
        $this->period = $var;

        return $this;
    }

    /**
     *学届。如果指定了 period 和 grade_year，则忽略 grade
     *
     * Generated from protobuf field <code>int32 grade_year = 5;</code>
     * @return int
     */
    public function getGradeYear()
    {
        return $this->grade_year;
    }

    /**
     *学届。如果指定了 period 和 grade_year，则忽略 grade
     *
     * Generated from protobuf field <code>int32 grade_year = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGradeYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->grade_year = $var;

        return $this;
    }

    /**
     *年级
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     *年级
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
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
     *班级序号
     *
     * Generated from protobuf field <code>int32 class_no = 7;</code>
     * @return int
     */
    public function getClassNo()
    {
        return $this->class_no;
    }

    /**
     *班级序号
     *
     * Generated from protobuf field <code>int32 class_no = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setClassNo($var)
    {
        GPBUtil::checkInt32($var);
        $this->class_no = $var;

        return $this;
    }

    /**
     *姓名
     *
     * Generated from protobuf field <code>string username = 8;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *姓名
     *
     * Generated from protobuf field <code>string username = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     *性别
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.USER_SEX sex = 9;</code>
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     *性别
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.USER_SEX sex = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSex($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\School_student\USER_SEX::class);
        $this->sex = $var;

        return $this;
    }

    /**
     *申请时间，格式： yyyy-mm-dd hh:nn:ss
     *
     * Generated from protobuf field <code>string submit_time = 10;</code>
     * @return string
     */
    public function getSubmitTime()
    {
        return $this->submit_time;
    }

    /**
     *申请时间，格式： yyyy-mm-dd hh:nn:ss
     *
     * Generated from protobuf field <code>string submit_time = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubmitTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->submit_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.StudentApplyInfo.APPROVE_STATUS status = 11;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_student.StudentApplyInfo.APPROVE_STATUS status = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\School_student\StudentApplyInfo_APPROVE_STATUS::class);
        $this->status = $var;

        return $this;
    }

}

