<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im_group.proto

namespace Cfwf\Micro_service\Im_group;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.im_group.GroupInfoItem</code>
 */
class GroupInfoItem extends \Google\Protobuf\Internal\Message
{
    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 1;</code>
     */
    private $groupid = 0;
    /**
     *群名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
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
     *超级管理员
     *
     * Generated from protobuf field <code>int64 super_admin = 6;</code>
     */
    private $super_admin = 0;
    /**
     *管理员列表:userid,userid...
     *
     * Generated from protobuf field <code>string admins = 7;</code>
     */
    private $admins = '';
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string createtime = 8;</code>
     */
    private $createtime = '';
    /**
     *自建群进入方式
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_ENTER_TYPE enterway = 9;</code>
     */
    private $enterway = 0;
    /**
     *自建群的人数限制 0=不限
     *
     * Generated from protobuf field <code>int32 member_limit = 10;</code>
     */
    private $member_limit = 0;
    /**
     *当前成员数
     *
     * Generated from protobuf field <code>int32 member_count = 11;</code>
     */
    private $member_count = 0;
    /**
     *json格式，信息描述，根据fld_type有特定含义。
     *
     * Generated from protobuf field <code>string target_describe = 12;</code>
     */
    private $target_describe = '';

    public function __construct() {
        \GPBMetadata\ImGroup::initOnce();
        parent::__construct();
    }

    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 1;</code>
     * @return int|string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     *群id
     *
     * Generated from protobuf field <code>int64 groupid = 1;</code>
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
     *群名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *群名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

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
     *超级管理员
     *
     * Generated from protobuf field <code>int64 super_admin = 6;</code>
     * @return int|string
     */
    public function getSuperAdmin()
    {
        return $this->super_admin;
    }

    /**
     *超级管理员
     *
     * Generated from protobuf field <code>int64 super_admin = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuperAdmin($var)
    {
        GPBUtil::checkInt64($var);
        $this->super_admin = $var;

        return $this;
    }

    /**
     *管理员列表:userid,userid...
     *
     * Generated from protobuf field <code>string admins = 7;</code>
     * @return string
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     *管理员列表:userid,userid...
     *
     * Generated from protobuf field <code>string admins = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAdmins($var)
    {
        GPBUtil::checkString($var, True);
        $this->admins = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string createtime = 8;</code>
     * @return string
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string createtime = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatetime($var)
    {
        GPBUtil::checkString($var, True);
        $this->createtime = $var;

        return $this;
    }

    /**
     *自建群进入方式
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_ENTER_TYPE enterway = 9;</code>
     * @return int
     */
    public function getEnterway()
    {
        return $this->enterway;
    }

    /**
     *自建群进入方式
     *
     * Generated from protobuf field <code>.cfwf.micro_service.im_group.GROUP_ENTER_TYPE enterway = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEnterway($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Im_group\GROUP_ENTER_TYPE::class);
        $this->enterway = $var;

        return $this;
    }

    /**
     *自建群的人数限制 0=不限
     *
     * Generated from protobuf field <code>int32 member_limit = 10;</code>
     * @return int
     */
    public function getMemberLimit()
    {
        return $this->member_limit;
    }

    /**
     *自建群的人数限制 0=不限
     *
     * Generated from protobuf field <code>int32 member_limit = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->member_limit = $var;

        return $this;
    }

    /**
     *当前成员数
     *
     * Generated from protobuf field <code>int32 member_count = 11;</code>
     * @return int
     */
    public function getMemberCount()
    {
        return $this->member_count;
    }

    /**
     *当前成员数
     *
     * Generated from protobuf field <code>int32 member_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->member_count = $var;

        return $this;
    }

    /**
     *json格式，信息描述，根据fld_type有特定含义。
     *
     * Generated from protobuf field <code>string target_describe = 12;</code>
     * @return string
     */
    public function getTargetDescribe()
    {
        return $this->target_describe;
    }

    /**
     *json格式，信息描述，根据fld_type有特定含义。
     *
     * Generated from protobuf field <code>string target_describe = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetDescribe($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_describe = $var;

        return $this;
    }

}

