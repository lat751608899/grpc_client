<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *获取群信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.GetGruopInfoRequest</code>
 */
class GetGruopInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 groupid = 1;</code>
     */
    private $groupid;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated int64 groupid = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Generated from protobuf field <code>repeated int64 groupid = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->groupid = $arr;

        return $this;
    }

}

