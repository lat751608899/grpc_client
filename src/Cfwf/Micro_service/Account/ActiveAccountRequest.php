<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Cfwf\Micro_service\Account;

use Google\Protobuf\Internal\GPBUtil;

/**
 * ActiveAccount
 *
 * Generated from protobuf message <code>cfwf.micro_service.account.ActiveAccountRequest</code>
 */
class ActiveAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>string active_code = 2;</code>
     */
    private $active_code = '';

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
     * Generated from protobuf field <code>string active_code = 2;</code>
     * @return string
     */
    public function getActiveCode()
    {
        return $this->active_code;
    }

    /**
     * Generated from protobuf field <code>string active_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_code = $var;

        return $this;
    }

}

