<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.GetResFileInfoResponse</code>
 */
class GetResFileInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.yunpan.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.yunpan.ResFileInfo res_files = 2;</code>
     */
    private $res_files;

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.yunpan.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.yunpan.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Yunpan\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.yunpan.ResFileInfo res_files = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResFiles()
    {
        return $this->res_files;
    }

    /**
     * Generated from protobuf field <code>repeated .cfwf.micro_service.yunpan.ResFileInfo res_files = 2;</code>
     * @param \Cfwf\Micro_service\Yunpan\ResFileInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cfwf\Micro_service\Yunpan\ResFileInfo::class);
        $this->res_files = $arr;

        return $this;
    }

}

