<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 *传入学校id，获取统计数据 "理论研究"， 返回 教师列表
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetWebStatTeachersTheoryRequest</code>
 */
class GetWebStatTeachersTheoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *学校id，不能为0
     *
     * Generated from protobuf field <code>int32 schoolid = 1;</code>
     */
    private $schoolid = 0;
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
     *年级， 0=不限
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
     */
    private $grade = 0;
    /**
     *学科， 0=不限
     *
     * Generated from protobuf field <code>int32 subject = 7;</code>
     */
    private $subject = 0;
    /**
     *排名规则  0=总数排名(默认)
     *
     * Generated from protobuf field <code>int32 orderby = 8;</code>
     */
    private $orderby = 0;
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     */
    private $page_size = 0;
    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 10;</code>
     */
    private $page = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *学校id，不能为0
     *
     * Generated from protobuf field <code>int32 schoolid = 1;</code>
     * @return int
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     *学校id，不能为0
     *
     * Generated from protobuf field <code>int32 schoolid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSchoolid($var)
    {
        GPBUtil::checkInt32($var);
        $this->schoolid = $var;

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
     *年级， 0=不限
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     *年级， 0=不限
     *
     * Generated from protobuf field <code>int32 grade = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkInt32($var);
        $this->grade = $var;

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
     *排名规则  0=总数排名(默认)
     *
     * Generated from protobuf field <code>int32 orderby = 8;</code>
     * @return int
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     *排名规则  0=总数排名(默认)
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

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
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
     * Generated from protobuf field <code>int32 page = 10;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

}

