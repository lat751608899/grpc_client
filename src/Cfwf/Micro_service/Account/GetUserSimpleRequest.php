<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Cfwf\Micro_service\Account;

use Google\Protobuf\Internal\GPBUtil;

/**
 * GetUserSimpleInfo 获取其他用户简单信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.account.GetUserSimpleRequest</code>
 */
class GetUserSimpleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated fixed64 userid = 1;</code>
     */
    private $userid;

    public function __construct() {
        \GPBMetadata\Account::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 userid = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>repeated fixed64 userid = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->userid = $arr;

        return $this;
    }

}

