<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Post_message;

/**
 */
class PostMessageClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 发送一般消息
     * @param \Cfwf\Micro_service\Post_message\PostCommonMessageToUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCommonMessageToUsers(\Cfwf\Micro_service\Post_message\PostCommonMessageToUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCommonMessageToUsers',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cfwf\Micro_service\Post_message\PostCommonMessageToSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCommonMessageToSchoolClass(\Cfwf\Micro_service\Post_message\PostCommonMessageToSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCommonMessageToSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cfwf\Micro_service\Post_message\PostCommonMessageToCooperativeGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCommonMessageToCooperativeGroup(\Cfwf\Micro_service\Post_message\PostCommonMessageToCooperativeGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCommonMessageToCooperativeGroup',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发送计数消息
     * @param \Cfwf\Micro_service\Post_message\PostCounterMessageToUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCounterMessageToUsers(\Cfwf\Micro_service\Post_message\PostCounterMessageToUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCounterMessageToUsers',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cfwf\Micro_service\Post_message\PostCounterMessageToSchoolClassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCounterMessageToSchoolClass(\Cfwf\Micro_service\Post_message\PostCounterMessageToSchoolClassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCounterMessageToSchoolClass',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cfwf\Micro_service\Post_message\PostCounterMessageToCooperativeGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCounterMessageToCooperativeGroup(\Cfwf\Micro_service\Post_message\PostCounterMessageToCooperativeGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.post_message.PostMessage/PostCounterMessageToCooperativeGroup',
        $argument,
        ['\Cfwf\Micro_service\Post_message\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
