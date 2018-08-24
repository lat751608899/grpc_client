<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.GetCurrentClientVersionResponse</code>
 */
class GetCurrentClientVersionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 1;</code>
     */
    private $os = 0;
    /**
     *版本号
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';
    /**
     *安装文件下载地址，全路径 
     *
     * Generated from protobuf field <code>string setupfile_url = 3;</code>
     */
    private $setupfile_url = '';
    /**
     *安装文件大小，单位： Byte
     *
     * Generated from protobuf field <code>int32 setupfile_size = 4;</code>
     */
    private $setupfile_size = 0;
    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Monitor::initOnce();
        parent::__construct();
    }

    /**
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 1;</code>
     * @return int
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     *1=pc 2=android 3=ios
     *
     * Generated from protobuf field <code>int32 os = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOs($var)
    {
        GPBUtil::checkInt32($var);
        $this->os = $var;

        return $this;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *版本号
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     *安装文件下载地址，全路径 
     *
     * Generated from protobuf field <code>string setupfile_url = 3;</code>
     * @return string
     */
    public function getSetupfileUrl()
    {
        return $this->setupfile_url;
    }

    /**
     *安装文件下载地址，全路径 
     *
     * Generated from protobuf field <code>string setupfile_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSetupfileUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->setupfile_url = $var;

        return $this;
    }

    /**
     *安装文件大小，单位： Byte
     *
     * Generated from protobuf field <code>int32 setupfile_size = 4;</code>
     * @return int
     */
    public function getSetupfileSize()
    {
        return $this->setupfile_size;
    }

    /**
     *安装文件大小，单位： Byte
     *
     * Generated from protobuf field <code>int32 setupfile_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSetupfileSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->setupfile_size = $var;

        return $this;
    }

    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

