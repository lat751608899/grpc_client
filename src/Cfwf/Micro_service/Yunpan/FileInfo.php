<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *文件信息
 *
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.FileInfo</code>
 */
class FileInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *上传人
     *
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     *文件id，全局唯一
     *
     * Generated from protobuf field <code>fixed64 fileid = 2;</code>
     */
    private $fileid = 0;
    /**
     *原始文件名
     *
     * Generated from protobuf field <code>string filename = 3;</code>
     */
    private $filename = '';
    /**
     *文件大小， Byte
     *
     * Generated from protobuf field <code>fixed64 file_size = 4;</code>
     */
    private $file_size = 0;
    /**
     *已上传大小，Byte
     *
     * Generated from protobuf field <code>fixed64 upload_size = 5;</code>
     */
    private $upload_size = 0;
    /**
     *文件md5
     *
     * Generated from protobuf field <code>string md5 = 6;</code>
     */
    private $md5 = '';
    /**
     *文件校验码
     *
     * Generated from protobuf field <code>string crc = 7;</code>
     */
    private $crc = '';
    /**
     *文件存储到fastdfs内的文件名
     *
     * Generated from protobuf field <code>string fastdfs_id = 8;</code>
     */
    private $fastdfs_id = '';
    /**
     *文件资源类型        
     *
     * Generated from protobuf field <code>int32 file_res_type = 9;</code>
     */
    private $file_res_type = 0;
    /**
     *文件上传缓存服务器id    
     *
     * Generated from protobuf field <code>int32 file_server_id = 10;</code>
     */
    private $file_server_id = 0;
    /**
     *0=原始缓存位置  1=预处理结果缓存位置   
     *
     * Generated from protobuf field <code>int32 save_path = 11;</code>
     */
    private $save_path = 0;

    public function __construct() {
        \GPBMetadata\Yunpan::initOnce();
        parent::__construct();
    }

    /**
     *上传人
     *
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     *上传人
     *
     * Generated from protobuf field <code>fixed64 userid = 1;</code>
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
     *文件id，全局唯一
     *
     * Generated from protobuf field <code>fixed64 fileid = 2;</code>
     * @return int|string
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     *文件id，全局唯一
     *
     * Generated from protobuf field <code>fixed64 fileid = 2;</code>
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
     *原始文件名
     *
     * Generated from protobuf field <code>string filename = 3;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     *原始文件名
     *
     * Generated from protobuf field <code>string filename = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

    /**
     *文件大小， Byte
     *
     * Generated from protobuf field <code>fixed64 file_size = 4;</code>
     * @return int|string
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     *文件大小， Byte
     *
     * Generated from protobuf field <code>fixed64 file_size = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->file_size = $var;

        return $this;
    }

    /**
     *已上传大小，Byte
     *
     * Generated from protobuf field <code>fixed64 upload_size = 5;</code>
     * @return int|string
     */
    public function getUploadSize()
    {
        return $this->upload_size;
    }

    /**
     *已上传大小，Byte
     *
     * Generated from protobuf field <code>fixed64 upload_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUploadSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->upload_size = $var;

        return $this;
    }

    /**
     *文件md5
     *
     * Generated from protobuf field <code>string md5 = 6;</code>
     * @return string
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     *文件md5
     *
     * Generated from protobuf field <code>string md5 = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->md5 = $var;

        return $this;
    }

    /**
     *文件校验码
     *
     * Generated from protobuf field <code>string crc = 7;</code>
     * @return string
     */
    public function getCrc()
    {
        return $this->crc;
    }

    /**
     *文件校验码
     *
     * Generated from protobuf field <code>string crc = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCrc($var)
    {
        GPBUtil::checkString($var, True);
        $this->crc = $var;

        return $this;
    }

    /**
     *文件存储到fastdfs内的文件名
     *
     * Generated from protobuf field <code>string fastdfs_id = 8;</code>
     * @return string
     */
    public function getFastdfsId()
    {
        return $this->fastdfs_id;
    }

    /**
     *文件存储到fastdfs内的文件名
     *
     * Generated from protobuf field <code>string fastdfs_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFastdfsId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fastdfs_id = $var;

        return $this;
    }

    /**
     *文件资源类型        
     *
     * Generated from protobuf field <code>int32 file_res_type = 9;</code>
     * @return int
     */
    public function getFileResType()
    {
        return $this->file_res_type;
    }

    /**
     *文件资源类型        
     *
     * Generated from protobuf field <code>int32 file_res_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFileResType($var)
    {
        GPBUtil::checkInt32($var);
        $this->file_res_type = $var;

        return $this;
    }

    /**
     *文件上传缓存服务器id    
     *
     * Generated from protobuf field <code>int32 file_server_id = 10;</code>
     * @return int
     */
    public function getFileServerId()
    {
        return $this->file_server_id;
    }

    /**
     *文件上传缓存服务器id    
     *
     * Generated from protobuf field <code>int32 file_server_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFileServerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->file_server_id = $var;

        return $this;
    }

    /**
     *0=原始缓存位置  1=预处理结果缓存位置   
     *
     * Generated from protobuf field <code>int32 save_path = 11;</code>
     * @return int
     */
    public function getSavePath()
    {
        return $this->save_path;
    }

    /**
     *0=原始缓存位置  1=预处理结果缓存位置   
     *
     * Generated from protobuf field <code>int32 save_path = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSavePath($var)
    {
        GPBUtil::checkInt32($var);
        $this->save_path = $var;

        return $this;
    }

}

