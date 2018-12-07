<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * 区县/学校-"视频" 条目信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.WebStatVideoItem</code>
 */
class WebStatVideoItem extends \Google\Protobuf\Internal\Message
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
     *微课
     *
     * Generated from protobuf field <code>int32 weike_count = 3;</code>
     */
    private $weike_count = 0;
    /**
     *课堂实录
     *
     * Generated from protobuf field <code>int32 shilu_count = 4;</code>
     */
    private $shilu_count = 0;
    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 5;</code>
     */
    private $all_count = 0;
    /**
     *人均
     *
     * Generated from protobuf field <code>int32 per_person = 6;</code>
     */
    private $per_person = 0;

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
     *微课
     *
     * Generated from protobuf field <code>int32 weike_count = 3;</code>
     * @return int
     */
    public function getWeikeCount()
    {
        return $this->weike_count;
    }

    /**
     *微课
     *
     * Generated from protobuf field <code>int32 weike_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWeikeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->weike_count = $var;

        return $this;
    }

    /**
     *课堂实录
     *
     * Generated from protobuf field <code>int32 shilu_count = 4;</code>
     * @return int
     */
    public function getShiluCount()
    {
        return $this->shilu_count;
    }

    /**
     *课堂实录
     *
     * Generated from protobuf field <code>int32 shilu_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setShiluCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->shilu_count = $var;

        return $this;
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 5;</code>
     * @return int
     */
    public function getAllCount()
    {
        return $this->all_count;
    }

    /**
     *总数
     *
     * Generated from protobuf field <code>int32 all_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAllCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->all_count = $var;

        return $this;
    }

    /**
     *人均
     *
     * Generated from protobuf field <code>int32 per_person = 6;</code>
     * @return int
     */
    public function getPerPerson()
    {
        return $this->per_person;
    }

    /**
     *人均
     *
     * Generated from protobuf field <code>int32 per_person = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPerson($var)
    {
        GPBUtil::checkInt32($var);
        $this->per_person = $var;

        return $this;
    }

}

