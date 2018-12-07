<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetSchoolListResponse</code>
 */
class GetSchoolListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     *当前页
     *
     * Generated from protobuf field <code>int32 page = 3;</code>
     */
    private $page = 0;
    /**
     *总页数
     *
     * Generated from protobuf field <code>int32 page_count = 4;</code>
     */
    private $page_count = 0;
    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 record_count = 5;</code>
     */
    private $record_count = 0;
    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.SchoolInfoSimple list = 6;</code>
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
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Generated from protobuf field <code>int32 page_count = 4;</code>
     * @return int
     */
    public function getPageCount()
    {
        return $this->page_count;
    }

    /**
     *总页数
     *
     * Generated from protobuf field <code>int32 page_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_count = $var;

        return $this;
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 record_count = 5;</code>
     * @return int
     */
    public function getRecordCount()
    {
        return $this->record_count;
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 record_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->record_count = $var;

        return $this;
    }

    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.SchoolInfoSimple list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     *当前页结果列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.SchoolInfoSimple list = 6;</code>
     * @param \Cfwf\Micro_service\Resource_statistics\SchoolInfoSimple[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Resource_statistics\SchoolInfoSimple::class);
        $this->list = $arr;

        return $this;
    }

}

