<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.SetAdminsResponse</code>
 */
class SetAdminsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *返回被设置的管理员id
     *
     * Generated from protobuf field <code>repeated int64 admin_userids = 2;</code>
     */
    private $admin_userids;
    /**
     *返回群组id
     *
     * Generated from protobuf field <code>int64 group_id = 3;</code>
     */
    private $group_id = 0;

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
     *返回被设置的管理员id
     *
     * Generated from protobuf field <code>repeated int64 admin_userids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdminUserids()
    {
        return $this->admin_userids;
    }

    /**
     *返回被设置的管理员id
     *
     * Generated from protobuf field <code>repeated int64 admin_userids = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdminUserids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->admin_userids = $arr;

        return $this;
    }

    /**
     *返回群组id
     *
     * Generated from protobuf field <code>int64 group_id = 3;</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *返回群组id
     *
     * Generated from protobuf field <code>int64 group_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->group_id = $var;

        return $this;
    }

}
