<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.SchoolCourseVideoViewItem</code>
 */
class SchoolCourseVideoViewItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：同 ActiveUserItem
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     */
    private $date = 0;
    /**
     * Generated from protobuf field <code>int32 pc_view_count = 2;</code>
     */
    private $pc_view_count = 0;
    /**
     * Generated from protobuf field <code>int32 app_view_count = 3;</code>
     */
    private $app_view_count = 0;
    /**
     * Generated from protobuf field <code>int32 web_view_count = 4;</code>
     */
    private $web_view_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *格式：同 ActiveUserItem
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *格式：同 ActiveUserItem
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
     * Generated from protobuf field <code>int32 pc_view_count = 2;</code>
     * @return int
     */
    public function getPcViewCount()
    {
        return $this->pc_view_count;
    }

    /**
     * Generated from protobuf field <code>int32 pc_view_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPcViewCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->pc_view_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 app_view_count = 3;</code>
     * @return int
     */
    public function getAppViewCount()
    {
        return $this->app_view_count;
    }

    /**
     * Generated from protobuf field <code>int32 app_view_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAppViewCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->app_view_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 web_view_count = 4;</code>
     * @return int
     */
    public function getWebViewCount()
    {
        return $this->web_view_count;
    }

    /**
     * Generated from protobuf field <code>int32 web_view_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWebViewCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->web_view_count = $var;

        return $this;
    }

}

