<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetSchoolWeikeCountResponse</code>
 */
class GetSchoolWeikeCountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>int32 cityid = 2;</code>
     */
    private $cityid = 0;
    /**
     *微课总数
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     */
    private $count = 0;
    /**
     *播放总数
     *
     * Generated from protobuf field <code>int64 view_count = 4;</code>
     */
    private $view_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cityid = 2;</code>
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Generated from protobuf field <code>int32 cityid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCityid($var)
    {
        GPBUtil::checkInt32($var);
        $this->cityid = $var;

        return $this;
    }

    /**
     *微课总数
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     *微课总数
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     *播放总数
     *
     * Generated from protobuf field <code>int64 view_count = 4;</code>
     * @return int|string
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     *播放总数
     *
     * Generated from protobuf field <code>int64 view_count = 4;</code>
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

