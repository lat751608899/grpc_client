<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 获取配置信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.monitor.GetMicroServiceAddressRequest</code>
 */
class GetMicroServiceAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *调用者的 serviceid
     *
     * Generated from protobuf field <code>int32 service_id = 1;</code>
     */
    private $service_id = 0;
    /**
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
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
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *调用者本地已存在的版本
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
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

