<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetWebStatCountysVideoResponse</code>
 */
class GetWebStatCountysVideoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *第一条表示“本市”的统计总数
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.WebStatVideoItem list = 2;</code>
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
     *第一条表示“本市”的统计总数
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.WebStatVideoItem list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     *第一条表示“本市”的统计总数
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.resource_statistics.WebStatVideoItem list = 2;</code>
     * @param \Cfwf\Micro_service\Resource_statistics\WebStatVideoItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Resource_statistics\WebStatVideoItem::class);
        $this->list = $arr;

        return $this;
    }

}

