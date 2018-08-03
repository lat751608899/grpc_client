<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.CityStatisticsInfo</code>
 */
class CityStatisticsInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     */
    private $cityid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.CITY_LEVEL level = 2;</code>
     */
    private $level = 0;
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>int32 school_count = 4;</code>
     */
    private $school_count = 0;
    /**
     * Generated from protobuf field <code>int32 teacher_count = 5;</code>
     */
    private $teacher_count = 0;
    /**
     * Generated from protobuf field <code>int32 student_count = 6;</code>
     */
    private $student_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Generated from protobuf field <code>int32 cityid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCityid($var)
    {
        GPBUtil::checkInt32($var);
        $this->cityid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.CITY_LEVEL level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.CITY_LEVEL level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\CITY_LEVEL::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Generated from protobuf field <code>int32 school_count = 4;</code>
     * @return int
     */
    public function getSchoolCount()
    {
        return $this->school_count;
    }

    /**
     * Generated from protobuf field <code>int32 school_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSchoolCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->school_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 teacher_count = 5;</code>
     * @return int
     */
    public function getTeacherCount()
    {
        return $this->teacher_count;
    }

    /**
     * Generated from protobuf field <code>int32 teacher_count = 5;</code>
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
     * Generated from protobuf field <code>int32 student_count = 6;</code>
     * @return int
     */
    public function getStudentCount()
    {
        return $this->student_count;
    }

    /**
     * Generated from protobuf field <code>int32 student_count = 6;</code>
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

