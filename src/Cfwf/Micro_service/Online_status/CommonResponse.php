<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: online_status.proto

namespace Cfwf\Micro_service\Online_status;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *一般rpc调用返回值
 *
 * Generated from protobuf message <code>cfwf.micro_service.online_status.CommonResponse</code>
 */
class CommonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.online_status.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    private $msg = '';

    public function __construct() {
        \GPBMetadata\OnlineStatus::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.online_status.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.online_status.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Online_status\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}

