<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yunpan.proto

namespace Cfwf\Micro_service\Yunpan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *函数： SetPicFileStorageFinish 的 传入参数
 *
 * Generated from protobuf message <code>cfwf.micro_service.yunpan.SetPicFileStorageFinishRequest</code>
 */
class SetPicFileStorageFinishRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *文件id
     *
     * Generated from protobuf field <code>fixed64 fileid = 1;</code>
     */
    private $fileid = 0;
    /**
     *原图 fastdfsid
     *
     * Generated from protobuf field <code>string fastdfs_id = 2;</code>
     */
    private $fastdfs_id = '';
    /**
     *原图尺寸：width*height
     *
     * Generated from protobuf field <code>string pic_size = 3;</code>
     */
    private $pic_size = '';
    /**
     * 缩略图尺寸类型，缩略图的fastdfs_id分别为:fastdfs_id+'_medium'+fastdfs_id+'_small'+ext
     *
     * Generated from protobuf field <code>int32 thumbnail_type = 4;</code>
     */
    private $thumbnail_type = 0;

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
     *原图 fastdfsid
     *
     * Generated from protobuf field <code>string fastdfs_id = 2;</code>
     * @return string
     */
    public function getFastdfsId()
    {
        return $this->fastdfs_id;
    }

    /**
     *原图 fastdfsid
     *
     * Generated from protobuf field <code>string fastdfs_id = 2;</code>
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
     *原图尺寸：width*height
     *
     * Generated from protobuf field <code>string pic_size = 3;</code>
     * @return string
     */
    public function getPicSize()
    {
        return $this->pic_size;
    }

    /**
     *原图尺寸：width*height
     *
     * Generated from protobuf field <code>string pic_size = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPicSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->pic_size = $var;

        return $this;
    }

    /**
     * 缩略图尺寸类型，缩略图的fastdfs_id分别为:fastdfs_id+'_medium'+fastdfs_id+'_small'+ext
     *
     * Generated from protobuf field <code>int32 thumbnail_type = 4;</code>
     * @return int
     */
    public function getThumbnailType()
    {
        return $this->thumbnail_type;
    }

    /**
     * 缩略图尺寸类型，缩略图的fastdfs_id分别为:fastdfs_id+'_medium'+fastdfs_id+'_small'+ext
     *
     * Generated from protobuf field <code>int32 thumbnail_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setThumbnailType($var)
    {
        GPBUtil::checkInt32($var);
        $this->thumbnail_type = $var;

        return $this;
    }

}

