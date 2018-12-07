<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Cfwf\Micro_service\Account;

use Google\Protobuf\Internal\GPBUtil;

/**
 * SetUserAllIdentity 设置用户所拥有的全部身份
 *
 * Generated from protobuf message <code>cfwf.micro_service.account.SetUserAllIdentityRequest</code>
 */
class SetUserAllIdentityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.account.UserIdentity identitys = 2;</code>
     */
    private $identitys = null;

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
     * Generated from protobuf field <code>.cfwf.micro_service.account.UserIdentity identitys = 2;</code>
     * @return \Cfwf\Micro_service\Account\UserIdentity
     */
    public function getIdentitys()
    {
        return $this->identitys;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.account.UserIdentity identitys = 2;</code>
     * @param \Cfwf\Micro_service\Account\UserIdentity $var
     * @return $this
     */
    public function setIdentitys($var)
    {
        GPBUtil::checkMessage($var, \Cfwf\Micro_service\Account\UserIdentity::class);
        $this->identitys = $var;

        return $this;
    }

}

