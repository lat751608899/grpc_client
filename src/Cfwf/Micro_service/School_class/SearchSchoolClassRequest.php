<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_class.proto

namespace Cfwf\Micro_service\School_class;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *查询班级信息列表(SearchSchoolClass) 
 *
 * Generated from protobuf message <code>cfwf.micro_service.school_class.SearchSchoolClassRequest</code>
 */
class SearchSchoolClassRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 pagesize = 1;</code>
     */
    private $pagesize = 0;
    /**
     *当前页。如果>总页数，则返回最后一页的数据
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     */
    private $page = 0;
    /**
     *学校id，必填
     *
     * Generated from protobuf field <code>fixed64 schoolid = 3;</code>
     */
    private $schoolid = 0;
    /**
     *指定classid, 可传入多个classid: classid1,classid2...
     *
     * Generated from protobuf field <code>string classid = 4;</code>
     */
    private $classid = '';
    /**
     *阶段： 1=小学  2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 5;</code>
     */
    private $period = 0;
    /**
     *学届: 可多个: 2016,2017..  
     *
     * Generated from protobuf field <code>string grade_year = 6;</code>
     */
    private $grade_year = '';
    /**
     *当前年级: 可多个: 1,2,3 ...
     *
     * Generated from protobuf field <code>string grade = 7;</code>
     */
    private $grade = '';
    /**
     *班级序号: 可多个: 1,2,3 ...   
     *
     * Generated from protobuf field <code>string class_no = 8;</code>
     */
    private $class_no = '';
    /**
     *也搜索已归档的班级
     *
     * Generated from protobuf field <code>bool include_archived = 9;</code>
     */
    private $include_archived = false;
    /**
     *也搜索已删除的班级
     *
     * Generated from protobuf field <code>bool include_deleted = 10;</code>
     */
    private $include_deleted = false;

    public function __construct() {
        \GPBMetadata\SchoolClass::initOnce();
        parent::__construct();
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 pagesize = 1;</code>
     * @return int
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 pagesize = 1;</code>
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
     *学校id，必填
     *
     * Generated from protobuf field <code>fixed64 schoolid = 3;</code>
     * @return int|string
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     *学校id，必填
     *
     * Generated from protobuf field <code>fixed64 schoolid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSchoolid($var)
    {
        GPBUtil::checkUint64($var);
        $this->schoolid = $var;

        return $this;
    }

    /**
     *指定classid, 可传入多个classid: classid1,classid2...
     *
     * Generated from protobuf field <code>string classid = 4;</code>
     * @return string
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     *指定classid, 可传入多个classid: classid1,classid2...
     *
     * Generated from protobuf field <code>string classid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClassid($var)
    {
        GPBUtil::checkString($var, True);
        $this->classid = $var;

        return $this;
    }

    /**
     *阶段： 1=小学  2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 5;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     *阶段： 1=小学  2=初中 3=高中
     *
     * Generated from protobuf field <code>int32 period = 5;</code>
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
     *学届: 可多个: 2016,2017..  
     *
     * Generated from protobuf field <code>string grade_year = 6;</code>
     * @return string
     */
    public function getGradeYear()
    {
        return $this->grade_year;
    }

    /**
     *学届: 可多个: 2016,2017..  
     *
     * Generated from protobuf field <code>string grade_year = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setGradeYear($var)
    {
        GPBUtil::checkString($var, True);
        $this->grade_year = $var;

        return $this;
    }

    /**
     *当前年级: 可多个: 1,2,3 ...
     *
     * Generated from protobuf field <code>string grade = 7;</code>
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     *当前年级: 可多个: 1,2,3 ...
     *
     * Generated from protobuf field <code>string grade = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkString($var, True);
        $this->grade = $var;

        return $this;
    }

    /**
     *班级序号: 可多个: 1,2,3 ...   
     *
     * Generated from protobuf field <code>string class_no = 8;</code>
     * @return string
     */
    public function getClassNo()
    {
        return $this->class_no;
    }

    /**
     *班级序号: 可多个: 1,2,3 ...   
     *
     * Generated from protobuf field <code>string class_no = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setClassNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_no = $var;

        return $this;
    }

    /**
     *也搜索已归档的班级
     *
     * Generated from protobuf field <code>bool include_archived = 9;</code>
     * @return bool
     */
    public function getIncludeArchived()
    {
        return $this->include_archived;
    }

    /**
     *也搜索已归档的班级
     *
     * Generated from protobuf field <code>bool include_archived = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeArchived($var)
    {
        GPBUtil::checkBool($var);
        $this->include_archived = $var;

        return $this;
    }

    /**
     *也搜索已删除的班级
     *
     * Generated from protobuf field <code>bool include_deleted = 10;</code>
     * @return bool
     */
    public function getIncludeDeleted()
    {
        return $this->include_deleted;
    }

    /**
     *也搜索已删除的班级
     *
     * Generated from protobuf field <code>bool include_deleted = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->include_deleted = $var;

        return $this;
    }

}

