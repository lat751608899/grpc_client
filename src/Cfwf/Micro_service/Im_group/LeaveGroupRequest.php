<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBUtil;

/**
 *离开群
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.LeaveGroupRequest</code>
 */
class LeaveGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户ID
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *群ID   当不知道groupid时，靠3，4,5来确定groupid
     *
     * Generated from protobuf field <code>int64 groupid = 2;</code>
     */
    private $groupid = 0;
    /**
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 3;</code>
     */
    private $type = 0;
    /**
     *分组所属的单位，如:学校、教育局 
     *
     * Generated from protobuf field <code>int64 target_unit = 4;</code>
     */
    private $target_unit = 0;
    /**
     *分组ID, 如 年级编号, 班级id, 协作组id等
     *
     * Generated from protobuf field <code>int64 target = 5;</code>
     */
    private $target = 0;
    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 6;</code>
     */
    private $force_leave = false;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *用户ID
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *用户ID
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
     *群ID   当不知道groupid时，靠3，4,5来确定groupid
     *
     * Generated from protobuf field <code>int64 groupid = 2;</code>
     * @return int|string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     *群ID   当不知道groupid时，靠3，4,5来确定groupid
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
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Im_group\GROUP_TYPE::class);
        $this->type = $var;

        return $this;
    }

    /**
     *分组所属的单位，如:学校、教育局 
     *
     * Generated from protobuf field <code>int64 target_unit = 4;</code>
     * @return int|string
     */
    public function getTargetUnit()
    {
        return $this->target_unit;
    }

    /**
     *分组所属的单位，如:学校、教育局 
     *
     * Generated from protobuf field <code>int64 target_unit = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTargetUnit($var)
    {
        GPBUtil::checkInt64($var);
        $this->target_unit = $var;

        return $this;
    }

    /**
     *分组ID, 如 年级编号, 班级id, 协作组id等
     *
     * Generated from protobuf field <code>int64 target = 5;</code>
     * @return int|string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     *分组ID, 如 年级编号, 班级id, 协作组id等
     *
     * Generated from protobuf field <code>int64 target = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkInt64($var);
        $this->target = $var;

        return $this;
    }

    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 6;</code>
     * @return bool
     */
    public function getForceLeave()
    {
        return $this->force_leave;
    }

    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setForceLeave($var)
    {
        GPBUtil::checkBool($var);
        $this->force_leave = $var;

        return $this;
    }

}

