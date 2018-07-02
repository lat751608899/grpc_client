<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *获取群聊天列表
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.GetGroupSpeakListRequest</code>
 */
class GetGroupSpeakListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *群ID
     *
     * Generated from protobuf field <code>int64 group_id = 1;</code>
     */
    private $group_id = 0;
    /**
     *获取发送时间在这个id之前的条目
     *
     * Generated from protobuf field <code>int64 before_msgid = 2;</code>
     */
    private $before_msgid = 0;
    /**
     *获取发送时间在这个id之后的条目
     *
     * Generated from protobuf field <code>int64 after_msgid = 3;</code>
     */
    private $after_msgid = 0;
    /**
     *获取条数
     *
     * Generated from protobuf field <code>int32 limit_count = 4;</code>
     */
    private $limit_count = 0;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *群ID
     *
     * Generated from protobuf field <code>int64 group_id = 1;</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *群ID
     *
     * Generated from protobuf field <code>int64 group_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     *获取发送时间在这个id之前的条目
     *
     * Generated from protobuf field <code>int64 before_msgid = 2;</code>
     * @return int|string
     */
    public function getBeforeMsgid()
    {
        return $this->before_msgid;
    }

    /**
     *获取发送时间在这个id之前的条目
     *
     * Generated from protobuf field <code>int64 before_msgid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBeforeMsgid($var)
    {
        GPBUtil::checkInt64($var);
        $this->before_msgid = $var;

        return $this;
    }

    /**
     *获取发送时间在这个id之后的条目
     *
     * Generated from protobuf field <code>int64 after_msgid = 3;</code>
     * @return int|string
     */
    public function getAfterMsgid()
    {
        return $this->after_msgid;
    }

    /**
     *获取发送时间在这个id之后的条目
     *
     * Generated from protobuf field <code>int64 after_msgid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAfterMsgid($var)
    {
        GPBUtil::checkInt64($var);
        $this->after_msgid = $var;

        return $this;
    }

    /**
     *获取条数
     *
     * Generated from protobuf field <code>int32 limit_count = 4;</code>
     * @return int
     */
    public function getLimitCount()
    {
        return $this->limit_count;
    }

    /**
     *获取条数
     *
     * Generated from protobuf field <code>int32 limit_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLimitCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit_count = $var;

        return $this;
    }

}

