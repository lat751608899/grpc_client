<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *搜索自己所在群
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.SearchGroupRequest</code>
 */
class SearchGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *搜索关键字 (群名称)
     *
     * Generated from protobuf field <code>repeated string keyword = 2;</code>
     */
    private $keyword;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *用户id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *用户id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     *搜索关键字 (群名称)
     *
     * Generated from protobuf field <code>repeated string keyword = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     *搜索关键字 (群名称)
     *
     * Generated from protobuf field <code>repeated string keyword = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyword($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->keyword = $arr;

        return $this;
    }

}

