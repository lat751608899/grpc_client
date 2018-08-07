<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.RemainUserItem</code>
 */
class RemainUserItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：20170102
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     */
    private $date = 0;
    /**
     *新增用户数
     *
     * Generated from protobuf field <code>int32 new_usercount = 2;</code>
     */
    private $new_usercount = 0;
    /**
     *留存比例， 50 表示 50%的留存比 。 remain_percentage.size() == 13, 分别表示 第0天->第10天， 第15天，第30天 的留存比
     *
     * Generated from protobuf field <code>repeated int32 remain_percentage = 3;</code>
     */
    private $remain_percentage;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *格式：20170102
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *格式：20170102
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkInt32($var);
        $this->date = $var;

        return $this;
    }

    /**
     *新增用户数
     *
     * Generated from protobuf field <code>int32 new_usercount = 2;</code>
     * @return int
     */
    public function getNewUsercount()
    {
        return $this->new_usercount;
    }

    /**
     *新增用户数
     *
     * Generated from protobuf field <code>int32 new_usercount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNewUsercount($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_usercount = $var;

        return $this;
    }

    /**
     *留存比例， 50 表示 50%的留存比 。 remain_percentage.size() == 13, 分别表示 第0天->第10天， 第15天，第30天 的留存比
     *
     * Generated from protobuf field <code>repeated int32 remain_percentage = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemainPercentage()
    {
        return $this->remain_percentage;
    }

    /**
     *留存比例， 50 表示 50%的留存比 。 remain_percentage.size() == 13, 分别表示 第0天->第10天， 第15天，第30天 的留存比
     *
     * Generated from protobuf field <code>repeated int32 remain_percentage = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemainPercentage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->remain_percentage = $arr;

        return $this;
    }

}

