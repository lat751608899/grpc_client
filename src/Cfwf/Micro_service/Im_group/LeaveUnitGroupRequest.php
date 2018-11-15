<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.LeaveUnitGroupRequest</code>
 */
class LeaveUnitGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户ID
     *
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *所属的单位
     *
     * Generated from protobuf field <code>int64 target_unit = 2;</code>
     */
    private $target_unit = 0;
    /**
     *群类型，可多个。 如果设置，则离开所设置的类型的群；如果不设置，则离开此单位所有群
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GROUP_TYPE group_type = 3;</code>
     */
    private $group_type;
    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 4;</code>
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
     *所属的单位
     *
     * Generated from protobuf field <code>int64 target_unit = 2;</code>
     * @return int|string
     */
    public function getTargetUnit()
    {
        return $this->target_unit;
    }

    /**
     *所属的单位
     *
     * Generated from protobuf field <code>int64 target_unit = 2;</code>
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
     *群类型，可多个。 如果设置，则离开所设置的类型的群；如果不设置，则离开此单位所有群
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GROUP_TYPE group_type = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupType()
    {
        return $this->group_type;
    }

    /**
     *群类型，可多个。 如果设置，则离开所设置的类型的群；如果不设置，则离开此单位所有群
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.im_group.GROUP_TYPE group_type = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Cfwf\Micro_service\Im_group\GROUP_TYPE::class);
        $this->group_type = $arr;

        return $this;
    }

    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 4;</code>
     * @return bool
     */
    public function getForceLeave()
    {
        return $this->force_leave;
    }

    /**
     *强制离开，被移出
     *
     * Generated from protobuf field <code>bool force_leave = 4;</code>
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

