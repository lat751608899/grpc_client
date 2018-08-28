<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: monitor.proto

namespace Cfwf\Micro_service\Monitor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.monitor.ReportRunStatusResponse</code>
 */
class ReportRunStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>int32 micro_service_addr_version = 2;</code>
     */
    private $micro_service_addr_version = 0;
    /**
     * Generated from protobuf field <code>int32 database_attr_version = 3;</code>
     */
    private $database_attr_version = 0;
    /**
     * Generated from protobuf field <code>int32 redis_attr_version = 4;</code>
     */
    private $redis_attr_version = 0;
    /**
     * Generated from protobuf field <code>int32 rabbitmq_attr_version = 5;</code>
     */
    private $rabbitmq_attr_version = 0;

    public function __construct() {
        \GPBMetadata\Monitor::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.monitor.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Monitor\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 micro_service_addr_version = 2;</code>
     * @return int
     */
    public function getMicroServiceAddrVersion()
    {
        return $this->micro_service_addr_version;
    }

    /**
     * Generated from protobuf field <code>int32 micro_service_addr_version = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMicroServiceAddrVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->micro_service_addr_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 database_attr_version = 3;</code>
     * @return int
     */
    public function getDatabaseAttrVersion()
    {
        return $this->database_attr_version;
    }

    /**
     * Generated from protobuf field <code>int32 database_attr_version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDatabaseAttrVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->database_attr_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 redis_attr_version = 4;</code>
     * @return int
     */
    public function getRedisAttrVersion()
    {
        return $this->redis_attr_version;
    }

    /**
     * Generated from protobuf field <code>int32 redis_attr_version = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRedisAttrVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->redis_attr_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rabbitmq_attr_version = 5;</code>
     * @return int
     */
    public function getRabbitmqAttrVersion()
    {
        return $this->rabbitmq_attr_version;
    }

    /**
     * Generated from protobuf field <code>int32 rabbitmq_attr_version = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRabbitmqAttrVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->rabbitmq_attr_version = $var;

        return $this;
    }

}
