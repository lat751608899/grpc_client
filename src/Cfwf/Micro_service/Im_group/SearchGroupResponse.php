<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.SearchGroupResponse</code>
 */
class SearchGroupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GroupInfoItem list = 2;</code>
     */
    private $list;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Im_group\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GroupInfoItem list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GroupInfoItem list = 2;</code>
     * @param \Cfwf\Micro_service\Im_group\GroupInfoItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Im_group\GroupInfoItem::class);
        $this->list = $arr;

        return $this;
    }

}

