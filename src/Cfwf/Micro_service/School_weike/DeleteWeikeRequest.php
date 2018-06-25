<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_weike.proto

namespace Cfwf\Micro_service\School_weike;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_weike.DeleteWeikeRequest</code>
 */
class DeleteWeikeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *微课ID
     *
     * Generated from protobuf field <code>repeated string weike_id = 1;</code>
     */
    private $weike_id;
    /**
     *用户类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_weike.DELETE_WEIKE_USER_TYPE usertype = 2;</code>
     */
    private $usertype = 0;

    public function __construct() {
        \GPBMetadata\SchoolWeike::initOnce();
        parent::__construct();
    }

    /**
     *微课ID
     *
     * Generated from protobuf field <code>repeated string weike_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeikeId()
    {
        return $this->weike_id;
    }

    /**
     *微课ID
     *
     * Generated from protobuf field <code>repeated string weike_id = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeikeId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->weike_id = $arr;

        return $this;
    }

    /**
     *用户类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_weike.DELETE_WEIKE_USER_TYPE usertype = 2;</code>
     * @return int
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     *用户类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_weike.DELETE_WEIKE_USER_TYPE usertype = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUsertype($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\School_weike\DELETE_WEIKE_USER_TYPE::class);
        $this->usertype = $var;

        return $this;
    }

}

