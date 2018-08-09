<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetNewUserStatisticsResponse</code>
 */
class GetNewUserStatisticsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *新增用户总数
     *
     * Generated from protobuf field <code>int64 total_count = 2;</code>
     */
    private $total_count = 0;
    /**
     *按时间新增用户数列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.NewUserItem list = 5;</code>
     */
    private $list;

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
     *新增用户总数
     *
     * Generated from protobuf field <code>int64 total_count = 2;</code>
     * @return int|string
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     *新增用户总数
     *
     * Generated from protobuf field <code>int64 total_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     *按时间新增用户数列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.NewUserItem list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     *按时间新增用户数列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.NewUserItem list = 5;</code>
     * @param \Cfwf\Micro_service\Resource_statistics\NewUserItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Resource_statistics\NewUserItem::class);
        $this->list = $arr;

        return $this;
    }

}

