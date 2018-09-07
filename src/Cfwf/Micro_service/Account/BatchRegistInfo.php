<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Cfwf\Micro_service\Account;

use Google\Protobuf\Internal\GPBUtil;

/**
 *批量注册
 *
 * Generated from protobuf message <code>cfwf.micro_service.account.BatchRegistInfo</code>
 */
class BatchRegistInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号
     *
     * Generated from protobuf field <code>string mobile_phone = 1;</code>
     */
    private $mobile_phone = '';
    /**
     *用户民、昵称
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     *密码	
     *
     * Generated from protobuf field <code>string password = 3;</code>
     */
    private $password = '';
    /**
     *用户身份
     *
     * Generated from protobuf field <code>.cfwf.micro_service.account.USER_IDENTITY_TYPE identity = 4;</code>
     */
    private $identity = 0;

    public function __construct() {
        \GPBMetadata\Account::initOnce();
        parent::__construct();
    }

    /**
     *手机号
     *
     * Generated from protobuf field <code>string mobile_phone = 1;</code>
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     *手机号
     *
     * Generated from protobuf field <code>string mobile_phone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobilePhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile_phone = $var;

        return $this;
    }

    /**
     *用户民、昵称
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *用户民、昵称
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     *密码	
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     *密码	
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     *用户身份
     *
     * Generated from protobuf field <code>.cfwf.micro_service.account.USER_IDENTITY_TYPE identity = 4;</code>
     * @return int
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     *用户身份
     *
     * Generated from protobuf field <code>.cfwf.micro_service.account.USER_IDENTITY_TYPE identity = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Account\USER_IDENTITY_TYPE::class);
        $this->identity = $var;

        return $this;
    }

}

