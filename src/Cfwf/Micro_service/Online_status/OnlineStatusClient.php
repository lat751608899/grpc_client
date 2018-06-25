<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Online_status;

/**
 */
class OnlineStatusClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 设置在线状态，用户手动登录成功后调用
     * @param \Cfwf\Micro_service\Online_status\UpdateOnlineStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateOnlineStatus(\Cfwf\Micro_service\Online_status\UpdateOnlineStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.online_status.OnlineStatus/UpdateOnlineStatus',
        $argument,
        ['\Cfwf\Micro_service\Online_status\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
