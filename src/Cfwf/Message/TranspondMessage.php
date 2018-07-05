<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Cfwf\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *服务器转发的消息，某用户发给另一用户，接入服务器收到指令后，将之投递到RabbitMQ上。 服务器只做转发，不做其他处理
 *
 * Generated from protobuf message <code>cfwf.message.TranspondMessage</code>
 */
class TranspondMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 msgid = 1;</code>
     */
    private $msgid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.message.TranspondMessage.MESSAGE_TYPE msg_type = 2;</code>
     */
    private $msg_type = 0;
    /**
     * Generated from protobuf field <code>int64 from_userid = 3;</code>
     */
    private $from_userid = 0;
    /**
     *根据msg_type 不同有特殊格式。 json字符串
     *
     * Generated from protobuf field <code>string content = 4;</code>
     */
    private $content = '';
    /**
     * Generated from protobuf field <code>string send_time = 5;</code>
     */
    private $send_time = '';

    public function __construct() {
        \GPBMetadata\Message::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 msgid = 1;</code>
     * @return int|string
     */
    public function getMsgid()
    {
        return $this->msgid;
    }

    /**
     * Generated from protobuf field <code>int64 msgid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMsgid($var)
    {
        GPBUtil::checkInt64($var);
        $this->msgid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.TranspondMessage.MESSAGE_TYPE msg_type = 2;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.TranspondMessage.MESSAGE_TYPE msg_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Message\TranspondMessage_MESSAGE_TYPE::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 from_userid = 3;</code>
     * @return int|string
     */
    public function getFromUserid()
    {
        return $this->from_userid;
    }

    /**
     * Generated from protobuf field <code>int64 from_userid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->from_userid = $var;

        return $this;
    }

    /**
     *根据msg_type 不同有特殊格式。 json字符串
     *
     * Generated from protobuf field <code>string content = 4;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *根据msg_type 不同有特殊格式。 json字符串
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
     * Generated from protobuf field <code>string send_time = 5;</code>
     * @return string
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * Generated from protobuf field <code>string send_time = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSendTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->send_time = $var;

        return $this;
    }

}

