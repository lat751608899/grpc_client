<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_class.proto

namespace Cfwf\Micro_service\School_class;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_class.SearchSchoolClassResponse</code>
 */
class SearchSchoolClassResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_class.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 pagesize = 2;</code>
     */
    private $pagesize = 0;
    /**
     *当前页
     *
     * Generated from protobuf field <code>int32 page = 3;</code>
     */
    private $page = 0;
    /**
     *总页数
     *
     * Generated from protobuf field <code>int32 pagecount = 4;</code>
     */
    private $pagecount = 0;
    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 recordcount = 5;</code>
     */
    private $recordcount = 0;
    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_class.SchoolClassInfo list = 6;</code>
     */
    private $list;

    public function __construct() {
        \GPBMetadata\SchoolClass::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_class.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_class.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\School_class\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 pagesize = 2;</code>
     * @return int
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     *每页条数
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
     *当前页
     *
     * Generated from protobuf field <code>int32 page = 3;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *当前页
     *
     * Generated from protobuf field <code>int32 page = 3;</code>
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
     *总页数
     *
     * Generated from protobuf field <code>int32 pagecount = 4;</code>
     * @return int
     */
    public function getPagecount()
    {
        return $this->pagecount;
    }

    /**
     *总页数
     *
     * Generated from protobuf field <code>int32 pagecount = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPagecount($var)
    {
        GPBUtil::checkInt32($var);
        $this->pagecount = $var;

        return $this;
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 recordcount = 5;</code>
     * @return int
     */
    public function getRecordcount()
    {
        return $this->recordcount;
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 recordcount = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordcount($var)
    {
        GPBUtil::checkInt32($var);
        $this->recordcount = $var;

        return $this;
    }

    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_class.SchoolClassInfo list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.school_class.SchoolClassInfo list = 6;</code>
     * @param \Cfwf\Micro_service\School_class\SchoolClassInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\School_class\SchoolClassInfo::class);
        $this->list = $arr;

        return $this;
    }

}

