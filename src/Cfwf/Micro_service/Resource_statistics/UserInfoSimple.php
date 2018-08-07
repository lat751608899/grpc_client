<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.UserInfoSimple</code>
 */
class UserInfoSimple extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     * Generated from protobuf field <code>string custom_face = 3;</code>
     */
    private $custom_face = '';
    /**
     * Generated from protobuf field <code>int32 default_face = 4;</code>
     */
    private $default_face = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_SEX sex = 5;</code>
     */
    private $sex = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 6;</code>
     */
    private $identity = 0;
    /**
     *分类
     *
     * Generated from protobuf field <code>string attri = 7;</code>
     */
    private $attri = '';
    /**
     *年龄 : 19890522= 1989年5月22日
     *
     * Generated from protobuf field <code>int32 birthday = 8;</code>
     */
    private $birthday = 0;
    /**
     *所属机构(学校)名称
     *
     * Generated from protobuf field <code>string unit_name = 9;</code>
     */
    private $unit_name = '';
    /**
     *最近登录时间
     *
     * Generated from protobuf field <code>string login_time = 10;</code>
     */
    private $login_time = '';
    /**
     *注册时间
     *
     * Generated from protobuf field <code>string regist_time = 11;</code>
     */
    private $regist_time = '';

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
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
     * Generated from protobuf field <code>string custom_face = 3;</code>
     * @return string
     */
    public function getCustomFace()
    {
        return $this->custom_face;
    }

    /**
     * Generated from protobuf field <code>string custom_face = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomFace($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_face = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 default_face = 4;</code>
     * @return int
     */
    public function getDefaultFace()
    {
        return $this->default_face;
    }

    /**
     * Generated from protobuf field <code>int32 default_face = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultFace($var)
    {
        GPBUtil::checkInt32($var);
        $this->default_face = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_SEX sex = 5;</code>
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_SEX sex = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSex($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\USER_SEX::class);
        $this->sex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 6;</code>
     * @return int
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.USER_IDENTITY identity = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\USER_IDENTITY::class);
        $this->identity = $var;

        return $this;
    }

    /**
     *分类
     *
     * Generated from protobuf field <code>string attri = 7;</code>
     * @return string
     */
    public function getAttri()
    {
        return $this->attri;
    }

    /**
     *分类
     *
     * Generated from protobuf field <code>string attri = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAttri($var)
    {
        GPBUtil::checkString($var, True);
        $this->attri = $var;

        return $this;
    }

    /**
     *年龄 : 19890522= 1989年5月22日
     *
     * Generated from protobuf field <code>int32 birthday = 8;</code>
     * @return int
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     *年龄 : 19890522= 1989年5月22日
     *
     * Generated from protobuf field <code>int32 birthday = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBirthday($var)
    {
        GPBUtil::checkInt32($var);
        $this->birthday = $var;

        return $this;
    }

    /**
     *所属机构(学校)名称
     *
     * Generated from protobuf field <code>string unit_name = 9;</code>
     * @return string
     */
    public function getUnitName()
    {
        return $this->unit_name;
    }

    /**
     *所属机构(学校)名称
     *
     * Generated from protobuf field <code>string unit_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitName($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit_name = $var;

        return $this;
    }

    /**
     *最近登录时间
     *
     * Generated from protobuf field <code>string login_time = 10;</code>
     * @return string
     */
    public function getLoginTime()
    {
        return $this->login_time;
    }

    /**
     *最近登录时间
     *
     * Generated from protobuf field <code>string login_time = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_time = $var;

        return $this;
    }

    /**
     *注册时间
     *
     * Generated from protobuf field <code>string regist_time = 11;</code>
     * @return string
     */
    public function getRegistTime()
    {
        return $this->regist_time;
    }

    /**
     *注册时间
     *
     * Generated from protobuf field <code>string regist_time = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRegistTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->regist_time = $var;

        return $this;
    }

}
