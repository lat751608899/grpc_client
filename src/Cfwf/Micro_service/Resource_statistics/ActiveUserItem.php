<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.ActiveUserItem</code>
 */
class ActiveUserItem extends \Google\Protobuf\Internal\Message
{
    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     */
    private $date = 0;
    /**
     *总人数
     *
     * Generated from protobuf field <code>int64 user_count = 2;</code>
     */
    private $user_count = 0;
    /**
     *教师总数
     *
     * Generated from protobuf field <code>int64 teacher_count = 3;</code>
     */
    private $teacher_count = 0;
    /**
     *学生总数
     *
     * Generated from protobuf field <code>int64 student_count = 4;</code>
     */
    private $student_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *格式：按天统计：20170102； 按周统计  201700-201752；  按月统计： 201701-201712
     *
     * Generated from protobuf field <code>int32 date = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkInt32($var);
        $this->date = $var;

        return $this;
    }

    /**
     *总人数
     *
     * Generated from protobuf field <code>int64 user_count = 2;</code>
     * @return int|string
     */
    public function getUserCount()
    {
        return $this->user_count;
    }

    /**
     *总人数
     *
     * Generated from protobuf field <code>int64 user_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_count = $var;

        return $this;
    }

    /**
     *教师总数
     *
     * Generated from protobuf field <code>int64 teacher_count = 3;</code>
     * @return int|string
     */
    public function getTeacherCount()
    {
        return $this->teacher_count;
    }

    /**
     *教师总数
     *
     * Generated from protobuf field <code>int64 teacher_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTeacherCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->teacher_count = $var;

        return $this;
    }

    /**
     *学生总数
     *
     * Generated from protobuf field <code>int64 student_count = 4;</code>
     * @return int|string
     */
    public function getStudentCount()
    {
        return $this->student_count;
    }

    /**
     *学生总数
     *
     * Generated from protobuf field <code>int64 student_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStudentCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->student_count = $var;

        return $this;
    }

}

