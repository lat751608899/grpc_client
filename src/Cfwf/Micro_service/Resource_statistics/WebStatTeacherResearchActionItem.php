<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * 学校教师-"教研行动" 条目信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.WebStatTeacherResearchActionItem</code>
 */
class WebStatTeacherResearchActionItem extends \Google\Protobuf\Internal\Message
{
    /**
     * 返回区县列表时，表示区县id； 返回学校列表时，表示学校id；返回教师列表时，表示教师id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     * 返回区县列表时，表示区县名称； 返回学校列表时，表示学校名称；返回教师列表时，表示教师名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 3;</code>
     */
    private $xiezuozu_count = 0;
    /**
     *专题讨论
     *
     * Generated from protobuf field <code>int32 zhuanti_count = 4;</code>
     */
    private $zhuanti_count = 0;
    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 14;</code>
     */
    private $all_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * 返回区县列表时，表示区县id； 返回学校列表时，表示学校id；返回教师列表时，表示教师id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 返回区县列表时，表示区县id； 返回学校列表时，表示学校id；返回教师列表时，表示教师id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * 返回区县列表时，表示区县名称； 返回学校列表时，表示学校名称；返回教师列表时，表示教师名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 返回区县列表时，表示区县名称； 返回学校列表时，表示学校名称；返回教师列表时，表示教师名称
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
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 3;</code>
     * @return int
     */
    public function getXiezuozuCount()
    {
        return $this->xiezuozu_count;
    }

    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setXiezuozuCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->xiezuozu_count = $var;

        return $this;
    }

    /**
     *专题讨论
     *
     * Generated from protobuf field <code>int32 zhuanti_count = 4;</code>
     * @return int
     */
    public function getZhuantiCount()
    {
        return $this->zhuanti_count;
    }

    /**
     *专题讨论
     *
     * Generated from protobuf field <code>int32 zhuanti_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setZhuantiCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->zhuanti_count = $var;

        return $this;
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 14;</code>
     * @return int
     */
    public function getAllCount()
    {
        return $this->all_count;
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setAllCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->all_count = $var;

        return $this;
    }

}
