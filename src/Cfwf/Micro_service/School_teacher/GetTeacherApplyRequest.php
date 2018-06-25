<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_teacher.proto

namespace Cfwf\Micro_service\School_teacher;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_teacher.GetTeacherApplyRequest</code>
 */
class GetTeacherApplyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 teacherid = 1;</code>
     */
    private $teacherid = 0;
    /**
     * Generated from protobuf field <code>bool get_last_item = 2;</code>
     */
    private $get_last_item = false;

    public function __construct() {
        \GPBMetadata\SchoolTeacher::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 teacherid = 1;</code>
     * @return int|string
     */
    public function getTeacherid()
    {
        return $this->teacherid;
    }

    /**
     * Generated from protobuf field <code>int64 teacherid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTeacherid($var)
    {
        GPBUtil::checkInt64($var);
        $this->teacherid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool get_last_item = 2;</code>
     * @return bool
     */
    public function getGetLastItem()
    {
        return $this->get_last_item;
    }

    /**
     * Generated from protobuf field <code>bool get_last_item = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setGetLastItem($var)
    {
        GPBUtil::checkBool($var);
        $this->get_last_item = $var;

        return $this;
    }

}

