<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_course_video.proto

namespace Cfwf\Micro_service\School_coursevideo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_coursevideo.GetCourseVideoInfoRequest</code>
 */
class GetCourseVideoInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *课程id	 
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;

    public function __construct() {
        \GPBMetadata\SchoolCourseVideo::initOnce();
        parent::__construct();
    }

    /**
     *课程id	 
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *课程id	 
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

}

