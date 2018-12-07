<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 *GetDayActiveUserStatistics (GetDayActiveUserStatisticsRequest) returns (GetDayActiveUserStatisticsResponse) {}  
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetDayActiveUserStatisticsRequest</code>
 */
class GetDayActiveUserStatisticsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     */
    private $cityid = 0;
    /**
     *统计开始日期，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 2;</code>
     */
    private $begin_date = '';
    /**
     *统计截至日期，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     */
    private $end_date = '';

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 1;</code>
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
     *统计开始日期，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 2;</code>
     * @return string
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     *统计开始日期，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBeginDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->begin_date = $var;

        return $this;
    }

    /**
     *统计截至日期，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     *统计截至日期，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

}

