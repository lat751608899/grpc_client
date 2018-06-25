<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Tokencheck;

/**
 */
class TokenCheckClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 验证用户密码
     * @param \Cfwf\Micro_service\Tokencheck\CheckUserPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckUserPassword(\Cfwf\Micro_service\Tokencheck\CheckUserPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/CheckUserPassword',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 客户端登录：验证密码、保存aes key, 生成 token并返回. 如果成功 CommonResponse.msg 保存token)
     * @param \Cfwf\Micro_service\Tokencheck\CheckUserPasswordWhenClientLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckUserPasswordWhenClientLogin(\Cfwf\Micro_service\Tokencheck\CheckUserPasswordWhenClientLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/CheckUserPasswordWhenClientLogin',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 客户端接入：检查 token 并返回aes key。 token 和 aes key 为CheckUserPasswordWhenClientLogin存入
     * @param \Cfwf\Micro_service\Tokencheck\CheckUserTokenWhenClientAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckUserTokenWhenClientAccess(\Cfwf\Micro_service\Tokencheck\CheckUserTokenWhenClientAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/CheckUserTokenWhenClientAccess',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CheckUserTokenWhenClientAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 修改密码
     * @param \Cfwf\Micro_service\Tokencheck\ModifyUserPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyUserPassword(\Cfwf\Micro_service\Tokencheck\ModifyUserPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/ModifyUserPassword',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建 token
     * @param \Cfwf\Micro_service\Tokencheck\CreateTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateToken(\Cfwf\Micro_service\Tokencheck\CreateTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/CreateToken',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 检查token
     * @param \Cfwf\Micro_service\Tokencheck\CheckTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckToken(\Cfwf\Micro_service\Tokencheck\CheckTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.tokencheck.TokenCheck/CheckToken',
        $argument,
        ['\Cfwf\Micro_service\Tokencheck\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
