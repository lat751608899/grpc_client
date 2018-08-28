<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_class.proto

namespace Cfwf\Micro_service\School_class;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_class.ClearSchoolClassTeacherRequest</code>
 */
class ClearSchoolClassTeacherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     */
    private $operatorid = 0;
    /**
     *学校id
     *
     * Generated from protobuf field <code>fixed64 schoolid = 2;</code>
     */
    private $schoolid = 0;
    /**
     *清除此老师的班主任身份
     *
     * Generated from protobuf field <code>fixed64 teacherid = 3;</code>
     */
    private $teacherid = 0;

    public function __construct() {
        \GPBMetadata\SchoolClass::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @return int|string
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
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
     *清除此老师的班主任身份
     *
     * Generated from protobuf field <code>fixed64 teacherid = 3;</code>
     * @return int|string
     */
    public function getTeacherid()
    {
        return $this->teacherid;
    }

    /**
     *清除此老师的班主任身份
     *
     * Generated from protobuf field <code>fixed64 teacherid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTeacherid($var)
    {
        GPBUtil::checkUint64($var);
        $this->teacherid = $var;

        return $this;
    }

}
