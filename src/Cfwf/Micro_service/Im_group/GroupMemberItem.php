<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.GroupMemberItem</code>
 */
class GroupMemberItem extends \Google\Protobuf\Internal\Message
{
    /**
     *群成员id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *群内备注名称
     *
     * Generated from protobuf field <code>string nick_name = 2;</code>
     */
    private $nick_name = '';
    /**
     *加入时间
     *
     * Generated from protobuf field <code>string time = 3;</code>
     */
    private $time = '';
    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 4;</code>
     */
    private $groupid = 0;
    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 5;</code>
     */
    private $idnetity_tag = 0;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *群成员id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *群成员id
     *
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
     *群内备注名称
     *
     * Generated from protobuf field <code>string nick_name = 2;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nick_name;
    }

    /**
     *群内备注名称
     *
     * Generated from protobuf field <code>string nick_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNickName($var)
    {
        GPBUtil::checkString($var, True);
        $this->nick_name = $var;

        return $this;
    }

    /**
     *加入时间
     *
     * Generated from protobuf field <code>string time = 3;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *加入时间
     *
     * Generated from protobuf field <code>string time = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->time = $var;

        return $this;
    }

    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 4;</code>
     * @return int|string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupid($var)
    {
        GPBUtil::checkInt64($var);
        $this->groupid = $var;

        return $this;
    }

    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 5;</code>
     * @return int
     */
    public function getIdnetityTag()
    {
        return $this->idnetity_tag;
    }

    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setIdnetityTag($var)
    {
        GPBUtil::checkUint32($var);
        $this->idnetity_tag = $var;

        return $this;
    }

}

