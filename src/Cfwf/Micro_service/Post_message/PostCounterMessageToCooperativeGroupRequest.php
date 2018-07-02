<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: post_message.proto

namespace Cfwf\Micro_service\Post_message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.post_message.PostCounterMessageToCooperativeGroupRequest</code>
 */
class PostCounterMessageToCooperativeGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     */
    private $operatorid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.message.CommonMessage msg = 2;</code>
     */
    private $msg = null;
    /**
     *校内协作组id
     *
     * Generated from protobuf field <code>repeated fixed64 send_to_groupids = 3;</code>
     */
    private $send_to_groupids;

    public function __construct() {
        \GPBMetadata\PostMessage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @return int|string
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperatorid($var)
    {
        GPBUtil::checkUint64($var);
        $this->operatorid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.CommonMessage msg = 2;</code>
     * @return \Cfwf\Message\CommonMessage
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>.cfwf.message.CommonMessage msg = 2;</code>
     * @param \Cfwf\Message\CommonMessage $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkMessage($var, \Cfwf\Message\CommonMessage::class);
        $this->msg = $var;

        return $this;
    }

    /**
     *校内协作组id
     *
     * Generated from protobuf field <code>repeated fixed64 send_to_groupids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSendToGroupids()
    {
        return $this->send_to_groupids;
    }

    /**
     *校内协作组id
     *
     * Generated from protobuf field <code>repeated fixed64 send_to_groupids = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSendToGroupids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED64);
        $this->send_to_groupids = $arr;

        return $this;
    }

}

