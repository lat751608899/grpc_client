<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tokencheck.proto

namespace Cfwf\Micro_service\Tokencheck;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *函数： CheckToken 的 传入参数
 *
 * Generated from protobuf message <code>cfwf.micro_service.tokencheck.CheckTokenRequest</code>
 */
class CheckTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>int32 forwhat = 2;</code>
     */
    private $forwhat = 0;
    /**
     * Generated from protobuf field <code>string token = 3;</code>
     */
    private $token = '';
    /**
     *0=不验证os	
     *
     * Generated from protobuf field <code>int32 os = 4;</code>
     */
    private $os = 0;

    public function __construct() {
        \GPBMetadata\Tokencheck::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>uint64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkUint64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 forwhat = 2;</code>
     * @return int
     */
    public function getForwhat()
    {
        return $this->forwhat;
    }

    /**
     * Generated from protobuf field <code>int32 forwhat = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setForwhat($var)
    {
        GPBUtil::checkInt32($var);
        $this->forwhat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 3;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     *0=不验证os	
     *
     * Generated from protobuf field <code>int32 os = 4;</code>
     * @return int
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     *0=不验证os	
     *
     * Generated from protobuf field <code>int32 os = 4;</code>
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

