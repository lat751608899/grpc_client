<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Comment;

/**
 */
class CommentClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 增加一条评论
     * @param \Cfwf\Micro_service\Comment\InsertCommentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertComment(\Cfwf\Micro_service\Comment\InsertCommentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.comment.Comment/InsertComment',
        $argument,
        ['\Cfwf\Micro_service\Comment\InsertCommentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 评论发布者删除评论
     * @param \Cfwf\Micro_service\Comment\DeleteCommentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteComment(\Cfwf\Micro_service\Comment\DeleteCommentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.comment.Comment/DeleteComment',
        $argument,
        ['\Cfwf\Micro_service\Comment\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取评论列表
     * @param \Cfwf\Micro_service\Comment\GetCommentListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCommentList(\Cfwf\Micro_service\Comment\GetCommentListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.comment.Comment/GetCommentList',
        $argument,
        ['\Cfwf\Micro_service\Comment\GetCommentListResponse', 'decode'],
        $metadata, $options);
    }

}
