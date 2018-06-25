<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_weike.proto

namespace Cfwf\Micro_service\School_weike;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_weike.GetClassWeikeListRequest</code>
 */
class GetClassWeikeListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *第几页
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
     */
    private $page = 0;
    /**
     *一页显示多少条
     *
     * Generated from protobuf field <code>int32 pagesize = 2;</code>
     */
    private $pagesize = 0;
    /**
     *班级id   该字段需要传值
     *
     * Generated from protobuf field <code>repeated int64 classid_list = 3;</code>
     */
    private $classid_list;
    /**
     *发布者id 该字段如果不传值，则查询班级里所有老师发布的班级微课
     *
     * Generated from protobuf field <code>int64 userid = 4;</code>
     */
    private $userid = 0;
    /**
     *关键字 
     *
     * Generated from protobuf field <code>string keyword = 5;</code>
     */
    private $keyword = '';
    /**
     *年级、学科
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_weike.Grade_and_Subject grade_subject = 6;</code>
     */
    private $grade_subject;

    public function __construct() {
        \GPBMetadata\SchoolWeike::initOnce();
        parent::__construct();
    }

    /**
     *第几页
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *第几页
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
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
     *一页显示多少条
     *
     * Generated from protobuf field <code>int32 pagesize = 2;</code>
     * @return int
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     *一页显示多少条
     *
     * Generated from protobuf field <code>int32 pagesize = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPagesize($var)
    {
        GPBUtil::checkInt32($var);
        $this->pagesize = $var;

        return $this;
    }

    /**
     *班级id   该字段需要传值
     *
     * Generated from protobuf field <code>repeated int64 classid_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClassidList()
    {
        return $this->classid_list;
    }

    /**
     *班级id   该字段需要传值
     *
     * Generated from protobuf field <code>repeated int64 classid_list = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClassidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->classid_list = $arr;

        return $this;
    }

    /**
     *发布者id 该字段如果不传值，则查询班级里所有老师发布的班级微课
     *
     * Generated from protobuf field <code>int64 userid = 4;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *发布者id 该字段如果不传值，则查询班级里所有老师发布的班级微课
     *
     * Generated from protobuf field <code>int64 userid = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     *关键字 
     *
     * Generated from protobuf field <code>string keyword = 5;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     *关键字 
     *
     * Generated from protobuf field <code>string keyword = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword = $var;

        return $this;
    }

    /**
     *年级、学科
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_weike.Grade_and_Subject grade_subject = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGradeSubject()
    {
        return $this->grade_subject;
    }

    /**
     *年级、学科
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_weike.Grade_and_Subject grade_subject = 6;</code>
     * @param \Cfwf\Micro_service\School_weike\Grade_and_Subject[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGradeSubject($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\School_weike\Grade_and_Subject::class);
        $this->grade_subject = $arr;

        return $this;
    }

}

