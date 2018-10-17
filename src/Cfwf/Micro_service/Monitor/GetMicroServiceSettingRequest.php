<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.GetMicroServiceSettingRequest</code>
 */
class GetMicroServiceSettingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *调用者的 serviceid
     *
     * Generated from protobuf field <code>int32 service_id = 1;</code>
     */
    private $service_id = 0;
    /**
     *调用者实例编号或组编号
     *
     * Generated from protobuf field <code>int32 instance_id = 2;</code>
     */
    private $instance_id = 0;
    /**
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     */
    private $version = 0;

    public function __construct() {
        \GPBMetadata\Monitor::initOnce();
        parent::__construct();
    }

    /**
     *调用者的 serviceid
     *
     * Generated from protobuf field <code>int32 service_id = 1;</code>
     * @return int
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     *调用者的 serviceid
     *
     * Generated from protobuf field <code>int32 service_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkInt32($var);
        $this->service_id = $var;

        return $this;
    }

    /**
     *调用者实例编号或组编号
     *
     * Generated from protobuf field <code>int32 instance_id = 2;</code>
     * @return int
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     *调用者实例编号或组编号
     *
     * Generated from protobuf field <code>int32 instance_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkInt32($var);
        $this->instance_id = $var;

        return $this;
    }

    /**
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

}

