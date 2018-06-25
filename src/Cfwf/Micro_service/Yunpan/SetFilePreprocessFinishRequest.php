<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *函数： SetFilePreprocessFinish 的 传入参数
 *
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.SetFilePreprocessFinishRequest</code>
 */
class SetFilePreprocessFinishRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *文件id
     *
     * Generated from protobuf field <code>fixed64 fileid = 1;</code>
     */
    private $fileid = 0;
    /**
     *0=原始缓存位置  1=预处理结果缓存位置
     *
     * Generated from protobuf field <code>int32 save_path = 2;</code>
     */
    private $save_path = 0;
    /**
     *0=上传中 1=上传完，等待预处理 9=预处理完成，等待保存入仓库
     *
     * Generated from protobuf field <code>int32 file_status = 3;</code>
     */
    private $file_status = 0;

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     *文件id
     *
     * Generated from protobuf field <code>fixed64 fileid = 1;</code>
     * @return int|string
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     *文件id
     *
     * Generated from protobuf field <code>fixed64 fileid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileid($var)
    {
        GPBUtil::checkUint64($var);
        $this->fileid = $var;

        return $this;
    }

    /**
     *0=原始缓存位置  1=预处理结果缓存位置
     *
     * Generated from protobuf field <code>int32 save_path = 2;</code>
     * @return int
     */
    public function getSavePath()
    {
        return $this->save_path;
    }

    /**
     *0=原始缓存位置  1=预处理结果缓存位置
     *
     * Generated from protobuf field <code>int32 save_path = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSavePath($var)
    {
        GPBUtil::checkInt32($var);
        $this->save_path = $var;

        return $this;
    }

    /**
     *0=上传中 1=上传完，等待预处理 9=预处理完成，等待保存入仓库
     *
     * Generated from protobuf field <code>int32 file_status = 3;</code>
     * @return int
     */
    public function getFileStatus()
    {
        return $this->file_status;
    }

    /**
     *0=上传中 1=上传完，等待预处理 9=预处理完成，等待保存入仓库
     *
     * Generated from protobuf field <code>int32 file_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFileStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->file_status = $var;

        return $this;
    }

}

