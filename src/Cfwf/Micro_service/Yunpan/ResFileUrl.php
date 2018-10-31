<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.ResFileUrl</code>
 */
class ResFileUrl extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 file_resid = 1;</code>
     */
    private $file_resid = 0;
    /**
     * Generated from protobuf field <code>string download_url = 2;</code>
     */
    private $download_url = '';

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 file_resid = 1;</code>
     * @return int|string
     */
    public function getFileResid()
    {
        return $this->file_resid;
    }

    /**
     * Generated from protobuf field <code>int64 file_resid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileResid($var)
    {
        GPBUtil::checkInt64($var);
        $this->file_resid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string download_url = 2;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * Generated from protobuf field <code>string download_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->download_url = $var;

        return $this;
    }

}
