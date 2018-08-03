<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.ActiveUserItem</code>
 */
class ActiveUserItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     */
    private $date = 0;
    /**
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     */
    private $user_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
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
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     * @return int
     */
    public function getUserCount()
    {
        return $this->user_count;
    }

    /**
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->user_count = $var;

        return $this;
    }

}

