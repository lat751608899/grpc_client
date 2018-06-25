<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Sms;

/**
 */
class SMSClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 发送验证码
     * @param \Cfwf\Micro_service\Sms\SendVerificationCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendVerificationCode(\Cfwf\Micro_service\Sms\SendVerificationCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.sms.SMS/SendVerificationCode',
        $argument,
        ['\Cfwf\Micro_service\Sms\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 验证验证码
     * @param \Cfwf\Micro_service\Sms\CheckVerificationCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckVerificationCode(\Cfwf\Micro_service\Sms\CheckVerificationCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.sms.SMS/CheckVerificationCode',
        $argument,
        ['\Cfwf\Micro_service\Sms\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
