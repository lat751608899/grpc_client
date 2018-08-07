<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetSchoolListRequest</code>
 */
class GetSchoolListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     */
    private $page = 0;
    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 3;</code>
     */
    private $cityid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.SCHOOL_TYPE period = 4;</code>
     */
    private $period = 0;
    /**
     *录入日期筛选，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 5;</code>
     */
    private $begin_date = '';
    /**
     *录入日期筛选，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 6;</code>
     */
    private $end_date = '';

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 3;</code>
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * 0 = 全国
     *
     * Generated from protobuf field <code>int32 cityid = 3;</code>
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
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.SCHOOL_TYPE period = 4;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.SCHOOL_TYPE period = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\SCHOOL_TYPE::class);
        $this->period = $var;

        return $this;
    }

    /**
     *录入日期筛选，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 5;</code>
     * @return string
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     *录入日期筛选，格式: 2018-01-01
     *
     * Generated from protobuf field <code>string begin_date = 5;</code>
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
     *录入日期筛选，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 6;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     *录入日期筛选，格式: 2018-05-11
     *
     * Generated from protobuf field <code>string end_date = 6;</code>
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
