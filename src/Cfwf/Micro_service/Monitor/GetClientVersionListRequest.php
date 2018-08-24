<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.GetClientVersionListRequest</code>
 */
class GetClientVersionListRequest extends \Google\Protobuf\Internal\Message
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
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 3;</code>
     */
    private $os = 0;

    public function __construct() {
        \GPBMetadata\Monitor::initOnce();
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
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 3;</code>
     * @return int
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOs($var)
    {
        GPBUtil::checkInt32($var);
        $this->os = $var;

        return $this;
    }

}

