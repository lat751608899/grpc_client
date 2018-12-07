<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 *GetSchoolUserList
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetSchoolUserListRequest</code>
 */
class GetSchoolUserListRequest extends \Google\Protobuf\Internal\Message
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
     * 必填，学校id
     *
     * Generated from protobuf field <code>int64 schoolid = 3;</code>
     */
    private $schoolid = 0;
    /**
     *0=不限
     *
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 4;</code>
     */
    private $identity = 0;
    /**
     * Generated from protobuf field <code>string keyword = 5;</code>
     */
    private $keyword = '';

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
     * 必填，学校id
     *
     * Generated from protobuf field <code>int64 schoolid = 3;</code>
     * @return int|string
     */
    public function getSchoolid()
    {
        return $this->schoolid;
    }

    /**
     * 必填，学校id
     *
     * Generated from protobuf field <code>int64 schoolid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSchoolid($var)
    {
        GPBUtil::checkInt64($var);
        $this->schoolid = $var;

        return $this;
    }

    /**
     *0=不限
     *
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 4;</code>
     * @return int
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     *0=不限
     *
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\USER_IDENTITY::class);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keyword = 5;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
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

}

