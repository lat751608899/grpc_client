<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBUtil;

/**
 *设置超级管理员
 *
 * Generated from protobuf message <code>cfwf.micro_service.im_group.SetSuperAdminRequest</code>
 */
class SetSuperAdminRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *操作者id 
     *
     * Generated from protobuf field <code>int64 operatorid = 1;</code>
     */
    private $operatorid = 0;
    /**
     *【必填】被设置的超级管理员id
     *
     * Generated from protobuf field <code>int64 super_admin_userid = 2;</code>
     */
    private $super_admin_userid = 0;
    /**
     *【必填】true:增加管理员权限 false:去掉管理员权限
     *
     * Generated from protobuf field <code>bool is_add_admin = 3;</code>
     */
    private $is_add_admin = false;
    /**
     *群id 使用group_id 或者 type+target_unit+target确定群组，两者不能同时传空
     *
     * Generated from protobuf field <code>int64 group_id = 4;</code>
     */
    private $group_id = 0;
    /**
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 5;</code>
     */
    private $type = 0;
    /**
     *分组所属的单位，如:学校、教育局 
     *
     * Generated from protobuf field <code>int64 target_unit = 6;</code>
     */
    private $target_unit = 0;
    /**
     *分组ID, 如 年级编号, 班级id, 协作组id等
     *
     * Generated from protobuf field <code>int64 target = 7;</code>
     */
    private $target = 0;

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *操作者id 
     *
     * Generated from protobuf field <code>int64 operatorid = 1;</code>
     * @return int|string
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
     *操作者id 
     *
     * Generated from protobuf field <code>int64 operatorid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperatorid($var)
    {
        GPBUtil::checkInt64($var);
        $this->operatorid = $var;

        return $this;
    }

    /**
     *【必填】被设置的超级管理员id
     *
     * Generated from protobuf field <code>int64 super_admin_userid = 2;</code>
     * @return int|string
     */
    public function getSuperAdminUserid()
    {
        return $this->super_admin_userid;
    }

    /**
     *【必填】被设置的超级管理员id
     *
     * Generated from protobuf field <code>int64 super_admin_userid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuperAdminUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->super_admin_userid = $var;

        return $this;
    }

    /**
     *【必填】true:增加管理员权限 false:去掉管理员权限
     *
     * Generated from protobuf field <code>bool is_add_admin = 3;</code>
     * @return bool
     */
    public function getIsAddAdmin()
    {
        return $this->is_add_admin;
    }

    /**
     *【必填】true:增加管理员权限 false:去掉管理员权限
     *
     * Generated from protobuf field <code>bool is_add_admin = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAddAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_add_admin = $var;

        return $this;
    }

    /**
     *群id 使用group_id 或者 type+target_unit+target确定群组，两者不能同时传空
     *
     * Generated from protobuf field <code>int64 group_id = 4;</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *群id 使用group_id 或者 type+target_unit+target确定群组，两者不能同时传空
     *
     * Generated from protobuf field <code>int64 group_id = 4;</code>
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
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *群类型
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_TYPE type = 5;</code>
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
     * Generated from protobuf field <code>int64 target_unit = 6;</code>
     * @return int|string
     */
    public function getTargetUnit()
    {
        return $this->target_unit;
    }

    /**
     *分组所属的单位，如:学校、教育局 
     *
     * Generated from protobuf field <code>int64 target_unit = 6;</code>
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
     * Generated from protobuf field <code>int64 target = 7;</code>
     * @return int|string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     *分组ID, 如 年级编号, 班级id, 协作组id等
     *
     * Generated from protobuf field <code>int64 target = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkInt64($var);
        $this->target = $var;

        return $this;
    }

}

