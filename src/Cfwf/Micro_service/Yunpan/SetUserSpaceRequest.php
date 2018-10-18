<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBUtil;

/**
 *函数： SetUserSpace 的 传入参数
 *
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.SetUserSpaceRequest</code>
 */
class SetUserSpaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     */
    private $operatorid = 0;
    /**
     * Generated from protobuf field <code>fixed64 userid = 2;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>fixed64 all_space = 3;</code>
     */
    private $all_space = 0;

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @return int|string
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
     * Generated from protobuf field <code>fixed64 operatorid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperatorid($var)
    {
        GPBUtil::checkUint64($var);
        $this->operatorid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 2;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>fixed64 userid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkUint64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 all_space = 3;</code>
     * @return int|string
     */
    public function getAllSpace()
    {
        return $this->all_space;
    }

    /**
     * Generated from protobuf field <code>fixed64 all_space = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAllSpace($var)
    {
        GPBUtil::checkUint64($var);
        $this->all_space = $var;

        return $this;
    }

}

