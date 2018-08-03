<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *获取省市区县统计信息(学校->地图->全国、省市、区县  第一期) 
 *GetCityStatistics
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetCityStatisticsRequest</code>
 */
class GetCityStatisticsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *0=获取全国省市列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 1;</code>
     */
    private $parent_cityid = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *0=获取全国省市列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 1;</code>
     * @return int
     */
    public function getParentCityid()
    {
        return $this->parent_cityid;
    }

    /**
     *0=获取全国省市列表
     *
     * Generated from protobuf field <code>int32 parent_cityid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setParentCityid($var)
    {
        GPBUtil::checkInt32($var);
        $this->parent_cityid = $var;

        return $this;
    }

}

