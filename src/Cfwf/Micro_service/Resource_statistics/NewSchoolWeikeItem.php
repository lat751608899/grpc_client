<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.NewSchoolWeikeItem</code>
 */
class NewSchoolWeikeItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：同 ActiveUserItem
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     */
    private $date = 0;
    /**
     * Generated from protobuf field <code>int64 new_count = 2;</code>
     */
    private $new_count = 0;

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
     * Generated from protobuf field <code>int64 new_count = 2;</code>
     * @return int|string
     */
    public function getNewCount()
    {
        return $this->new_count;
    }

    /**
     * Generated from protobuf field <code>int64 new_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNewCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->new_count = $var;

        return $this;
    }

}

