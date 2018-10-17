<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * 区县/学校-"所有" 条目信息 
 *
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.WebStatAllItem</code>
 */
class WebStatAllItem extends \Google\Protobuf\Internal\Message
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
     *理论研究
     *
     * Generated from protobuf field <code>int32 theory_count = 3;</code>
     */
    private $theory_count = 0;
    /**
     *教学资源
     *
     * Generated from protobuf field <code>int32 resource_count = 4;</code>
     */
    private $resource_count = 0;
    /**
     *视频
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     */
    private $video_count = 0;
    /**
     *直播
     *
     * Generated from protobuf field <code>int32 broadcast_count = 6;</code>
     */
    private $broadcast_count = 0;
    /**
     *课堂评课
     *
     * Generated from protobuf field <code>int32 pingke_count = 7;</code>
     */
    private $pingke_count = 0;
    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 8;</code>
     */
    private $xiezuozu_count = 0;
    /**
     *教师空间
     *
     * Generated from protobuf field <code>int32 teacher_count = 9;</code>
     */
    private $teacher_count = 0;
    /**
     *学生空间
     *
     * Generated from protobuf field <code>int32 student_count = 10;</code>
     */
    private $student_count = 0;

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
     *理论研究
     *
     * Generated from protobuf field <code>int32 theory_count = 3;</code>
     * @return int
     */
    public function getTheoryCount()
    {
        return $this->theory_count;
    }

    /**
     *理论研究
     *
     * Generated from protobuf field <code>int32 theory_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTheoryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->theory_count = $var;

        return $this;
    }

    /**
     *教学资源
     *
     * Generated from protobuf field <code>int32 resource_count = 4;</code>
     * @return int
     */
    public function getResourceCount()
    {
        return $this->resource_count;
    }

    /**
     *教学资源
     *
     * Generated from protobuf field <code>int32 resource_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->resource_count = $var;

        return $this;
    }

    /**
     *视频
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     * @return int
     */
    public function getVideoCount()
    {
        return $this->video_count;
    }

    /**
     *视频
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->video_count = $var;

        return $this;
    }

    /**
     *直播
     *
     * Generated from protobuf field <code>int32 broadcast_count = 6;</code>
     * @return int
     */
    public function getBroadcastCount()
    {
        return $this->broadcast_count;
    }

    /**
     *直播
     *
     * Generated from protobuf field <code>int32 broadcast_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBroadcastCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->broadcast_count = $var;

        return $this;
    }

    /**
     *课堂评课
     *
     * Generated from protobuf field <code>int32 pingke_count = 7;</code>
     * @return int
     */
    public function getPingkeCount()
    {
        return $this->pingke_count;
    }

    /**
     *课堂评课
     *
     * Generated from protobuf field <code>int32 pingke_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPingkeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->pingke_count = $var;

        return $this;
    }

    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 8;</code>
     * @return int
     */
    public function getXiezuozuCount()
    {
        return $this->xiezuozu_count;
    }

    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 8;</code>
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
     *教师空间
     *
     * Generated from protobuf field <code>int32 teacher_count = 9;</code>
     * @return int
     */
    public function getTeacherCount()
    {
        return $this->teacher_count;
    }

    /**
     *教师空间
     *
     * Generated from protobuf field <code>int32 teacher_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTeacherCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->teacher_count = $var;

        return $this;
    }

    /**
     *学生空间
     *
     * Generated from protobuf field <code>int32 student_count = 10;</code>
     * @return int
     */
    public function getStudentCount()
    {
        return $this->student_count;
    }

    /**
     *学生空间
     *
     * Generated from protobuf field <code>int32 student_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStudentCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->student_count = $var;

        return $this;
    }

}
