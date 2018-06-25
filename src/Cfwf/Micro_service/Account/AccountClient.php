<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Account;

/**
 */
class AccountClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * --------------------------------------- 注册新用户
     * 检查手机号是否可用(在调用RegistNewAccountByMobilePhone 之前应先调用此接口检查) CommonRequest.msg==手机号 
     * @param \Cfwf\Micro_service\Account\CommonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckMobilePhoneAvailable(\Cfwf\Micro_service\Account\CommonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/CheckMobilePhoneAvailable',
        $argument,
        ['\Cfwf\Micro_service\Account\CheckMobilePhoneAvailableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 使用手机注册
     * @param \Cfwf\Micro_service\Account\RegistNewAccountByMobilePhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RegistNewAccountByMobilePhone(\Cfwf\Micro_service\Account\RegistNewAccountByMobilePhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/RegistNewAccountByMobilePhone',
        $argument,
        ['\Cfwf\Micro_service\Account\RegistNewAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量注册
     * @param \Cfwf\Micro_service\Account\BatchRegistNewAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchRegistNewAccount(\Cfwf\Micro_service\Account\BatchRegistNewAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/BatchRegistNewAccount',
        $argument,
        ['\Cfwf\Micro_service\Account\BatchRegistNewAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * --------------------------------------- 设置    
     * 设置用户的某个身份
     * @param \Cfwf\Micro_service\Account\SetUserIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserIdentity(\Cfwf\Micro_service\Account\SetUserIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SetUserIdentity',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置用户基本信息  传入参数中，UserBaseInfo.main_identity 将会被忽略，而使用系统定义的身份顺序。cb_id可不填写， userid必填
     * @param \Cfwf\Micro_service\Account\UserBaseInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserBaseInfo(\Cfwf\Micro_service\Account\UserBaseInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SetUserBaseInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置用户某项信息
     * @param \Cfwf\Micro_service\Account\SetUserInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserInfo(\Cfwf\Micro_service\Account\SetUserInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SetUserInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置用户验证好友方式
     * @param \Cfwf\Micro_service\Account\SetUserFriendCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserFriendCheck(\Cfwf\Micro_service\Account\SetUserFriendCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SetUserFriendCheck',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 绑定/修改 手机。绑定之前应调用CheckMobilePhoneAvailable检查手机是否可用
     * @param \Cfwf\Micro_service\Account\BindMobileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BindMobile(\Cfwf\Micro_service\Account\BindMobileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/BindMobile',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除用户心情
     * @param \Cfwf\Micro_service\Account\DeleteUserMoodRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteUserMood(\Cfwf\Micro_service\Account\DeleteUserMoodRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/DeleteUserMood',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * --------------------------------------- 查询  
     * 获取登录者基本信息
     * @param \Cfwf\Micro_service\Account\GetMyBaseInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMyBaseInfo(\Cfwf\Micro_service\Account\GetMyBaseInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/GetMyBaseInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\GetMyBaseInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取其他用户基本信息
     * @param \Cfwf\Micro_service\Account\GetUserBaseInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserBaseInfo(\Cfwf\Micro_service\Account\GetUserBaseInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/GetUserBaseInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\GetUserBaseInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取其他用户极简信息
     * @param \Cfwf\Micro_service\Account\GetUserSimpleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserSimpleInfo(\Cfwf\Micro_service\Account\GetUserSimpleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/GetUserSimpleInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\GetUserSimpleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据 cb id 查询用户基本信息
     * @param \Cfwf\Micro_service\Account\QueryUserBaseInfoByCBIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryUserBaseInfoByCBId(\Cfwf\Micro_service\Account\QueryUserBaseInfoByCBIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/QueryUserBaseInfoByCBId',
        $argument,
        ['\Cfwf\Micro_service\Account\QueryUserBaseInfoByCBIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 搜索用户
     * @param \Cfwf\Micro_service\Account\SearchUserBaseInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchUserBaseInfo(\Cfwf\Micro_service\Account\SearchUserBaseInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SearchUserBaseInfo',
        $argument,
        ['\Cfwf\Micro_service\Account\SearchUserBaseInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据登录名获取 userid
     * @param \Cfwf\Micro_service\Account\GetUserIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserId(\Cfwf\Micro_service\Account\GetUserIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/GetUserId',
        $argument,
        ['\Cfwf\Micro_service\Account\GetUserIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * --------------------------------------- 运维管理    
     * 设置用户状态: 限权、 限功能、 限制登录、 屏蔽其所发内容等
     * @param \Cfwf\Micro_service\Account\SetUserStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUserStatus(\Cfwf\Micro_service\Account\SetUserStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.account.Account/SetUserStatus',
        $argument,
        ['\Cfwf\Micro_service\Account\CommonResponse', 'decode'],
        $metadata, $options);
    }

}
