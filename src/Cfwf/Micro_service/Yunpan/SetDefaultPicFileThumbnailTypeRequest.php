<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.SetDefaultPicFileThumbnailTypeRequest</code>
 */
class SetDefaultPicFileThumbnailTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 filetype = 1;</code>
     */
    private $filetype = 0;
    /**
     * Generated from protobuf field <code>int32 thumbnail_type = 2;</code>
     */
    private $thumbnail_type = 0;

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 filetype = 1;</code>
     * @return int
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Generated from protobuf field <code>int32 filetype = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFiletype($var)
    {
        GPBUtil::checkInt32($var);
        $this->filetype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 thumbnail_type = 2;</code>
     * @return int
     */
    public function getThumbnailType()
    {
        return $this->thumbnail_type;
    }

    /**
     * Generated from protobuf field <code>int32 thumbnail_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setThumbnailType($var)
    {
        GPBUtil::checkInt32($var);
        $this->thumbnail_type = $var;

        return $this;
    }

}

