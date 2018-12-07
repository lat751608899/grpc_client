<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 *传入市id，获取统计数据 "协作组"， 返回 区县列表
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetWebStatCountysXieZuoZuRequest</code>
 */
class GetWebStatCountysXieZuoZuRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 地级市id，不能为0
     *
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     */
    private $cityid = 0;
    /**
     *学年  2018= 2018-2019学年    2017=2018-2018学年
     *
     * Generated from protobuf field <code>int32 school_year = 2;</code>
     */
    private $school_year = 0;
    /**
     *学期  0(不填)=全学年  1=上学期 2=下学期    
     *
     * Generated from protobuf field <code>int32 term = 3;</code>
     */
    private $term = 0;
    /**
     *精确查找，开始日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string begin_date = 4;</code>
     */
    private $begin_date = '';
    /**
     *精确查找，结束日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     */
    private $end_date = '';
    /**
     *学段， 0=不限 1=小学 2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 6;</code>
     */
    private $period = 0;
    /**
     *学科， 0=不限
     *
     * Generated from protobuf field <code>int32 subject = 7;</code>
     */
    private $subject = 0;
    /**
     *按 WebStatXieZuoZuItem 中统计项顺序，从1开始
     *
     * Generated from protobuf field <code>int32 orderby = 8;</code>
     */
    private $orderby = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * 地级市id，不能为0
     *
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * 地级市id，不能为0
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
     *学年  2018= 2018-2019学年    2017=2018-2018学年
     *
     * Generated from protobuf field <code>int32 school_year = 2;</code>
     * @return int
     */
    public function getSchoolYear()
    {
        return $this->school_year;
    }

    /**
     *学年  2018= 2018-2019学年    2017=2018-2018学年
     *
     * Generated from protobuf field <code>int32 school_year = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSchoolYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->school_year = $var;

        return $this;
    }

    /**
     *学期  0(不填)=全学年  1=上学期 2=下学期    
     *
     * Generated from protobuf field <code>int32 term = 3;</code>
     * @return int
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     *学期  0(不填)=全学年  1=上学期 2=下学期    
     *
     * Generated from protobuf field <code>int32 term = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkInt32($var);
        $this->term = $var;

        return $this;
    }

    /**
     *精确查找，开始日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string begin_date = 4;</code>
     * @return string
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     *精确查找，开始日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string begin_date = 4;</code>
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
     *精确查找，结束日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     *精确查找，结束日期。不为空时忽略 school_year 和 term
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     *学段， 0=不限 1=小学 2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 6;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     *学段， 0=不限 1=小学 2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkInt32($var);
        $this->period = $var;

        return $this;
    }

    /**
     *学科， 0=不限
     *
     * Generated from protobuf field <code>int32 subject = 7;</code>
     * @return int
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     *学科， 0=不限
     *
     * Generated from protobuf field <code>int32 subject = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkInt32($var);
        $this->subject = $var;

        return $this;
    }

    /**
     *按 WebStatXieZuoZuItem 中统计项顺序，从1开始
     *
     * Generated from protobuf field <code>int32 orderby = 8;</code>
     * @return int
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     *按 WebStatXieZuoZuItem 中统计项顺序，从1开始
     *
     * Generated from protobuf field <code>int32 orderby = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderby($var)
    {
        GPBUtil::checkInt32($var);
        $this->orderby = $var;

        return $this;
    }

}

