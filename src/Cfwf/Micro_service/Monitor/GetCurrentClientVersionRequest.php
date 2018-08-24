<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.GetCurrentClientVersionRequest</code>
 */
class GetCurrentClientVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 os = 1;</code>
     */
    private $os = 0;
    /**
     * Generated from protobuf field <code>string ip = 2;</code>
     */
    private $ip = '';

    public function __construct() {
        \GPBMetadata\Monitor::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 os = 1;</code>
     * @return int
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Generated from protobuf field <code>int32 os = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOs($var)
    {
        GPBUtil::checkInt32($var);
        $this->os = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip = 2;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

}

