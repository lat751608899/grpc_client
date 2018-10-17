<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.ClientVersionInfo</code>
 */
class ClientVersionInfo extends \Google\Protobuf\Internal\Message
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
     *升级文件(PC静默安装) 列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.UpgradeFileInfo update_files = 5;</code>
     */
    private $update_files;
    /**
     *生效时间。发布时如果不填写则取当前时间
     *
     * Generated from protobuf field <code>string effective_time = 6;</code>
     */
    private $effective_time = '';
    /**
     *定向更新ip范围
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.ClientIpScope client_ip_scope = 7;</code>
     */
    private $client_ip_scope;
    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 8;</code>
     */
    private $description = '';
    /**
     *发布人
     *
     * Generated from protobuf field <code>string userid = 9;</code>
     */
    private $userid = '';
    /**
     *状态。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.VersionStatus status = 10;</code>
     */
    private $status = 0;
    /**
     *已下载次数。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>int32 download_count = 11;</code>
     */
    private $download_count = 0;
    /**
     *版本创建时间，发布时间。发布或修改时不用填写
     *
     * Generated from protobuf field <code>string create_time = 12;</code>
     */
    private $create_time = '';
    /**
     *0=原版 1=教师版 2=学生版
     *
     * Generated from protobuf field <code>int32 version_type = 13;</code>
     */
    private $version_type = 0;

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
     *升级文件(PC静默安装) 列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.UpgradeFileInfo update_files = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdateFiles()
    {
        return $this->update_files;
    }

    /**
     *升级文件(PC静默安装) 列表
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.UpgradeFileInfo update_files = 5;</code>
     * @param \Cfwf\Micro_service\Monitor\UpgradeFileInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdateFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Monitor\UpgradeFileInfo::class);
        $this->update_files = $arr;

        return $this;
    }

    /**
     *生效时间。发布时如果不填写则取当前时间
     *
     * Generated from protobuf field <code>string effective_time = 6;</code>
     * @return string
     */
    public function getEffectiveTime()
    {
        return $this->effective_time;
    }

    /**
     *生效时间。发布时如果不填写则取当前时间
     *
     * Generated from protobuf field <code>string effective_time = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEffectiveTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->effective_time = $var;

        return $this;
    }

    /**
     *定向更新ip范围
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.ClientIpScope client_ip_scope = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientIpScope()
    {
        return $this->client_ip_scope;
    }

    /**
     *定向更新ip范围
     *
     * Generated from protobuf field <code>repeated .cfwf.micro_service.monitor.ClientIpScope client_ip_scope = 7;</code>
     * @param \Cfwf\Micro_service\Monitor\ClientIpScope[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientIpScope($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Monitor\ClientIpScope::class);
        $this->client_ip_scope = $arr;

        return $this;
    }

    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *升级说明
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     *发布人
     *
     * Generated from protobuf field <code>string userid = 9;</code>
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *发布人
     *
     * Generated from protobuf field <code>string userid = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkString($var, True);
        $this->userid = $var;

        return $this;
    }

    /**
     *状态。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.VersionStatus status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *状态。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.VersionStatus status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Monitor\VersionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     *已下载次数。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>int32 download_count = 11;</code>
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->download_count;
    }

    /**
     *已下载次数。 发布或修改时不用填写
     *
     * Generated from protobuf field <code>int32 download_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setDownloadCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->download_count = $var;

        return $this;
    }

    /**
     *版本创建时间，发布时间。发布或修改时不用填写
     *
     * Generated from protobuf field <code>string create_time = 12;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     *版本创建时间，发布时间。发布或修改时不用填写
     *
     * Generated from protobuf field <code>string create_time = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->create_time = $var;

        return $this;
    }

    /**
     *0=原版 1=教师版 2=学生版
     *
     * Generated from protobuf field <code>int32 version_type = 13;</code>
     * @return int
     */
    public function getVersionType()
    {
        return $this->version_type;
    }

    /**
     *0=原版 1=教师版 2=学生版
     *
     * Generated from protobuf field <code>int32 version_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setVersionType($var)
    {
        GPBUtil::checkInt32($var);
        $this->version_type = $var;

        return $this;
    }

}

