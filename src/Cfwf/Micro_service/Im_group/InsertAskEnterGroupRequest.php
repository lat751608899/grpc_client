<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *申请加入群
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.InsertAskEnterGroupRequest</code>
 */
class InsertAskEnterGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *申请者id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *群ID
     *
     * Generated from protobuf field <code>int64 groupid = 2;</code>
     */
    private $groupid = 0;
    /**
     *附带信息 
     *
     * Generated from protobuf field <code>string content = 3;</code>
     */
    private $content = '';
    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 4;</code>
     */
    private $idnetity_tag = 0;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *申请者id
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *申请者id
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
     *群ID
     *
     * Generated from protobuf field <code>int64 groupid = 2;</code>
     * @return int|string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     *群ID
     *
     * Generated from protobuf field <code>int64 groupid = 2;</code>
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
     *附带信息 
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *附带信息 
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 4;</code>
     * @return int
     */
    public function getIdnetityTag()
    {
        return $this->idnetity_tag;
    }

    /**
     *身份标签, GROUP_MEMBER_IDENTITY_TAG的集合。  如: IDENTITY_TAG_STUDENT，  IDENTITY_TAG_RESEARCHER | IDENTITY_TAG_TEACHER
     *
     * Generated from protobuf field <code>uint32 idnetity_tag = 4;</code>
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

