<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.VideoDayViewItem</code>
 */
class VideoDayViewItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：0-23  一段时期内0点-23点的平均活跃用户数
     *
     * Generated from protobuf field <code>int32 hour = 1;</code>
     */
    private $hour = 0;
    /**
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     */
    private $view_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *格式：0-23  一段时期内0点-23点的平均活跃用户数
     *
     * Generated from protobuf field <code>int32 hour = 1;</code>
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     *格式：0-23  一段时期内0点-23点的平均活跃用户数
     *
     * Generated from protobuf field <code>int32 hour = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->hour = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     * @return int|string
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * Generated from protobuf field <code>int64 view_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->view_count = $var;

        return $this;
    }

}
