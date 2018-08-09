<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetCityStatisticsResponse</code>
 */
class GetCityStatisticsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *0=获取全国省级列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 2;</code>
     */
    private $parent_cityid = 0;
    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.CityStatisticsInfo list = 3;</code>
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
     *0=获取全国省级列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 2;</code>
     * @return int
     */
    public function getParentCityid()
    {
        return $this->parent_cityid;
    }

    /**
     *0=获取全国省级列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setParentCityid($var)
    {
        GPBUtil::checkInt32($var);
        $this->parent_cityid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.CityStatisticsInfo list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.CityStatisticsInfo list = 3;</code>
     * @param \Cfwf\Micro_service\Resource_statistics\CityStatisticsInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Resource_statistics\CityStatisticsInfo::class);
        $this->list = $arr;

        return $this;
    }

}

