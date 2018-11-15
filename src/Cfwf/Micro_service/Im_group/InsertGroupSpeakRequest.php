<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.InsertGroupSpeakRequest</code>
 */
class InsertGroupSpeakRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *发送着userid
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *群id
     *
     * Generated from protobuf field <code>int64 group_id = 2;</code>
     */
    private $group_id = 0;
    /**
     *发送的消息类型。如果类型为IM_FRIEND_SPEACK_UNDO，则将要撤销的消息的id放入content字段内
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.IM_GROUP_SPEACK_TYPE speak_type = 3;</code>
     */
    private $speak_type = 0;
    /**
     *聊天内容
     *
     * Generated from protobuf field <code>string content = 4;</code>
     */
    private $content = '';
    /**
     *是否需要接收方做已读确认
     *
     * Generated from protobuf field <code>bool need_confirm = 5;</code>
     */
    private $need_confirm = false;
    /**
     *附加信息,json格式。 当content ==IM_GROUP_SPEACK_SYSTEM_INFORM 时为:{groupid:xxxx, groupname:xxxx}
     *
     * Generated from protobuf field <code>string extra_message = 6;</code>
     */
    private $extra_message = '';

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *发送着userid
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *发送着userid
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
     *群id
     *
     * Generated from protobuf field <code>int64 group_id = 2;</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *群id
     *
     * Generated from protobuf field <code>int64 group_id = 2;</code>
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
     *发送的消息类型。如果类型为IM_FRIEND_SPEACK_UNDO，则将要撤销的消息的id放入content字段内
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.IM_GROUP_SPEACK_TYPE speak_type = 3;</code>
     * @return int
     */
    public function getSpeakType()
    {
        return $this->speak_type;
    }

    /**
     *发送的消息类型。如果类型为IM_FRIEND_SPEACK_UNDO，则将要撤销的消息的id放入content字段内
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.IM_GROUP_SPEACK_TYPE speak_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSpeakType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Im_group\IM_GROUP_SPEACK_TYPE::class);
        $this->speak_type = $var;

        return $this;
    }

    /**
     *聊天内容
     *
     * Generated from protobuf field <code>string content = 4;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *聊天内容
     *
     * Generated from protobuf field <code>string content = 4;</code>
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
     *是否需要接收方做已读确认
     *
     * Generated from protobuf field <code>bool need_confirm = 5;</code>
     * @return bool
     */
    public function getNeedConfirm()
    {
        return $this->need_confirm;
    }

    /**
     *是否需要接收方做已读确认
     *
     * Generated from protobuf field <code>bool need_confirm = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedConfirm($var)
    {
        GPBUtil::checkBool($var);
        $this->need_confirm = $var;

        return $this;
    }

    /**
     *附加信息,json格式。 当content ==IM_GROUP_SPEACK_SYSTEM_INFORM 时为:{groupid:xxxx, groupname:xxxx}
     *
     * Generated from protobuf field <code>string extra_message = 6;</code>
     * @return string
     */
    public function getExtraMessage()
    {
        return $this->extra_message;
    }

    /**
     *附加信息,json格式。 当content ==IM_GROUP_SPEACK_SYSTEM_INFORM 时为:{groupid:xxxx, groupname:xxxx}
     *
     * Generated from protobuf field <code>string extra_message = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExtraMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->extra_message = $var;

        return $this;
    }

}

