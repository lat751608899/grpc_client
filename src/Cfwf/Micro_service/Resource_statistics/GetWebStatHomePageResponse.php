<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resource_statistics.proto

namespace Cfwf\Micro_service\Resource_statistics;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.resource_statistics.GetWebStatHomePageResponse</code>
 */
class GetWebStatHomePageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *注册用户
     *
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     */
    private $user_count = 0;
    /**
     *总资源数
     *
     * Generated from protobuf field <code>int32 resource_count = 3;</code>
     */
    private $resource_count = 0;
    /**
     *文章资源
     *
     * Generated from protobuf field <code>int32 article_count = 4;</code>
     */
    private $article_count = 0;
    /**
     *视频资源
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     */
    private $video_count = 0;
    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 6;</code>
     */
    private $xiezuozu_count = 0;
    /**
     *空间照片
     *
     * Generated from protobuf field <code>int32 photo_count = 7;</code>
     */
    private $photo_count = 0;
    /**
     *评课活动
     *
     * Generated from protobuf field <code>int32 pingke_count = 8;</code>
     */
    private $pingke_count = 0;
    /**
     *今日资源
     *
     * Generated from protobuf field <code>int32 today_count = 9;</code>
     */
    private $today_count = 0;
    /**
     *昨日资源
     *
     * Generated from protobuf field <code>int32 yestoday_count = 10;</code>
     */
    private $yestoday_count = 0;

    public function __construct() {
        \GPBMetadata\ResourceStatistics::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.resource_statistics.RPC_CALL_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\Resource_statistics\RPC_CALL_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     *注册用户
     *
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     * @return int
     */
    public function getUserCount()
    {
        return $this->user_count;
    }

    /**
     *注册用户
     *
     * Generated from protobuf field <code>int32 user_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->user_count = $var;

        return $this;
    }

    /**
     *总资源数
     *
     * Generated from protobuf field <code>int32 resource_count = 3;</code>
     * @return int
     */
    public function getResourceCount()
    {
        return $this->resource_count;
    }

    /**
     *总资源数
     *
     * Generated from protobuf field <code>int32 resource_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->resource_count = $var;

        return $this;
    }

    /**
     *文章资源
     *
     * Generated from protobuf field <code>int32 article_count = 4;</code>
     * @return int
     */
    public function getArticleCount()
    {
        return $this->article_count;
    }

    /**
     *文章资源
     *
     * Generated from protobuf field <code>int32 article_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setArticleCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->article_count = $var;

        return $this;
    }

    /**
     *视频资源
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     * @return int
     */
    public function getVideoCount()
    {
        return $this->video_count;
    }

    /**
     *视频资源
     *
     * Generated from protobuf field <code>int32 video_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->video_count = $var;

        return $this;
    }

    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 6;</code>
     * @return int
     */
    public function getXiezuozuCount()
    {
        return $this->xiezuozu_count;
    }

    /**
     *协作组
     *
     * Generated from protobuf field <code>int32 xiezuozu_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setXiezuozuCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->xiezuozu_count = $var;

        return $this;
    }

    /**
     *空间照片
     *
     * Generated from protobuf field <code>int32 photo_count = 7;</code>
     * @return int
     */
    public function getPhotoCount()
    {
        return $this->photo_count;
    }

    /**
     *空间照片
     *
     * Generated from protobuf field <code>int32 photo_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPhotoCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->photo_count = $var;

        return $this;
    }

    /**
     *评课活动
     *
     * Generated from protobuf field <code>int32 pingke_count = 8;</code>
     * @return int
     */
    public function getPingkeCount()
    {
        return $this->pingke_count;
    }

    /**
     *评课活动
     *
     * Generated from protobuf field <code>int32 pingke_count = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPingkeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->pingke_count = $var;

        return $this;
    }

    /**
     *今日资源
     *
     * Generated from protobuf field <code>int32 today_count = 9;</code>
     * @return int
     */
    public function getTodayCount()
    {
        return $this->today_count;
    }

    /**
     *今日资源
     *
     * Generated from protobuf field <code>int32 today_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTodayCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->today_count = $var;

        return $this;
    }

    /**
     *昨日资源
     *
     * Generated from protobuf field <code>int32 yestoday_count = 10;</code>
     * @return int
     */
    public function getYestodayCount()
    {
        return $this->yestoday_count;
    }

    /**
     *昨日资源
     *
     * Generated from protobuf field <code>int32 yestoday_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setYestodayCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->yestoday_count = $var;

        return $this;
    }

}

