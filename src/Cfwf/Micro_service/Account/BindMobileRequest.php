<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Cfwf\Micro_service\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *绑定/修改 手机
 *
 * Generated from protobuf message <code>cfwf.micro_service.account.BindMobileRequest</code>
 */
class BindMobileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>string mobile_phone = 2;</code>
     */
    private $mobile_phone = '';

    public function __construct() {
        \GPBMetadata\Account::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
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
     * Generated from protobuf field <code>string mobile_phone = 2;</code>
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * Generated from protobuf field <code>string mobile_phone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMobilePhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile_phone = $var;

        return $this;
    }

}

