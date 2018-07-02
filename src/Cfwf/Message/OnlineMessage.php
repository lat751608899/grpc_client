<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Cfwf\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *一般在线推送
 *
 * Generated from protobuf message <code>cfwf.message.OnlineMessage</code>
 */
class OnlineMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.message.OnlineMessage.MESSAGE_TYPE msg_type = 1;</code>
     */
    private $msg_type = 0;
    /**
     *json格式，根据 msg_type 不同而不同。
     *
     * Generated from protobuf field <code>string content = 2;</code>
     */
    private $content = '';

    public function __construct() {
        \GPBMetadata\Message::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.OnlineMessage.MESSAGE_TYPE msg_type = 1;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.OnlineMessage.MESSAGE_TYPE msg_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Message\OnlineMessage_MESSAGE_TYPE::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     *json格式，根据 msg_type 不同而不同。
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *json格式，根据 msg_type 不同而不同。
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

}

