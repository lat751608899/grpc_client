<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_weike.proto

namespace Cfwf\Micro_service\School_weike;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_weike.GetClassWeikeViewCountRequest</code>
 */
class GetClassWeikeViewCountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *微课id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     *班级id	
     *
     * Generated from protobuf field <code>repeated int64 classid = 2;</code>
     */
    private $classid;

    public function __construct() {
        \GPBMetadata\SchoolWeike::initOnce();
        parent::__construct();
    }

    /**
     *微课id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *微课id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     *班级id	
     *
     * Generated from protobuf field <code>repeated int64 classid = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     *班级id	
     *
     * Generated from protobuf field <code>repeated int64 classid = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClassid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->classid = $arr;

        return $this;
    }

}

