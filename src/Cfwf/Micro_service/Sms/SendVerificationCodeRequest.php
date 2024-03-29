<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sms.proto

namespace Cfwf\Micro_service\Sms;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.sms.SendVerificationCodeRequest</code>
 */
class SendVerificationCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号
     *
     * Generated from protobuf field <code>string mobile_phone = 1;</code>
     */
    private $mobile_phone = '';
    /**
     *验证码类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.sms.CODE_TYPE type = 2;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\Sms::initOnce();
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
     *验证码类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.sms.CODE_TYPE type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *验证码类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.sms.CODE_TYPE type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Sms\CODE_TYPE::class);
        $this->type = $var;

        return $this;
    }

}

