<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

/**
 *通用rpc调用返回结果
 *
 * Protobuf enum <code>Cfwf\Micro_service\Resource_statistics\RPC_CALL_RESULT</code>
 */
class RPC_CALL_RESULT
{
    /**
     *不应出现
     *
     * Generated from protobuf enum <code>RPC_CALL_RESULT_NONE = 0;</code>
     */
    const RPC_CALL_RESULT_NONE = 0;
    /**
     *成功
     *
     * Generated from protobuf enum <code>RPC_CALL_RESULT_SUCCESS = 1;</code>
     */
    const RPC_CALL_RESULT_SUCCESS = 1;
    /**
     *数据库出错
     *
     * Generated from protobuf enum <code>RPC_CALL_RESULT_DB_ERROR = 2;</code>
     */
    const RPC_CALL_RESULT_DB_ERROR = 2;
    /**
     *传入数据有错，格式错误或者找不到对应条目
     *
     * Generated from protobuf enum <code>RPC_CALL_RESULT_INPUT_ERROR = 3;</code>
     */
    const RPC_CALL_RESULT_INPUT_ERROR = 3;
    /**
     *其他错误
     *
     * Generated from protobuf enum <code>RPC_CALL_RESULT_ERROR = 4;</code>
     */
    const RPC_CALL_RESULT_ERROR = 4;
}

