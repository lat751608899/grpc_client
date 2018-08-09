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
     * Generated from protobuf field <code>int64 school_count = 4;</code>
     */
    private $school_count = 0;
    /**
     * Generated from protobuf field <code>int64 teacher_count = 5;</code>
     */
    private $teacher_count = 0;
    /**
     * Generated from protobuf field <code>int64 student_count = 6;</code>
     */
    private $student_count = 0;
    /**
     * Generated from protobuf field <code>int64 video_count = 7;</code>
     */
    private $video_count = 0;
    /**
     * Generated from protobuf field <code>int64 article_count = 8;</code>
     */
    private $article_count = 0;
    /**
     *坐标，经度
     *
     * Generated from protobuf field <code>double coordinate_x = 9;</code>
     */
    private $coordinate_x = 0.0;
    /**
     *坐标，纬度  
     *
     * Generated from protobuf field <code>double coordinate_y = 10;</code>
     */
    private $coordinate_y = 0.0;

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
     * Generated from protobuf field <code>int64 school_count = 4;</code>
     * @return int|string
     */
    public function getSchoolCount()
    {
        return $this->school_count;
    }

    /**
     * Generated from protobuf field <code>int64 school_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSchoolCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->school_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 teacher_count = 5;</code>
     * @return int|string
     */
    public function getTeacherCount()
    {
        return $this->teacher_count;
    }

    /**
     * Generated from protobuf field <code>int64 teacher_count = 5;</code>
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
     * Generated from protobuf field <code>int64 student_count = 6;</code>
     * @return int|string
     */
    public function getStudentCount()
    {
        return $this->student_count;
    }

    /**
     * Generated from protobuf field <code>int64 student_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStudentCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->student_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 video_count = 7;</code>
     * @return int|string
     */
    public function getVideoCount()
    {
        return $this->video_count;
    }

    /**
     * Generated from protobuf field <code>int64 video_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVideoCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->video_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 article_count = 8;</code>
     * @return int|string
     */
    public function getArticleCount()
    {
        return $this->article_count;
    }

    /**
     * Generated from protobuf field <code>int64 article_count = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setArticleCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->article_count = $var;

        return $this;
    }

    /**
     *坐标，经度
     *
     * Generated from protobuf field <code>double coordinate_x = 9;</code>
     * @return float
     */
    public function getCoordinateX()
    {
        return $this->coordinate_x;
    }

    /**
     *坐标，经度
     *
     * Generated from protobuf field <code>double coordinate_x = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setCoordinateX($var)
    {
        GPBUtil::checkDouble($var);
        $this->coordinate_x = $var;

        return $this;
    }

    /**
     *坐标，纬度  
     *
     * Generated from protobuf field <code>double coordinate_y = 10;</code>
     * @return float
     */
    public function getCoordinateY()
    {
        return $this->coordinate_y;
    }

    /**
     *坐标，纬度  
     *
     * Generated from protobuf field <code>double coordinate_y = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setCoordinateY($var)
    {
        GPBUtil::checkDouble($var);
        $this->coordinate_y = $var;

        return $this;
    }

}

