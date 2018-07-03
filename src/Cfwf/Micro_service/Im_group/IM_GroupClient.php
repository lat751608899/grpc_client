<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\Im_group;

/**
 */
class IM_GroupClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取某用户群列表
     * @param \Cfwf\Micro_service\Im_group\GetGroupListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupList(\Cfwf\Micro_service\Im_group\GetGroupListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGroupList',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGroupListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取群成员列表
     * @param \Cfwf\Micro_service\Im_group\GetGroupMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupMembers(\Cfwf\Micro_service\Im_group\GetGroupMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGroupMembers',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGroupMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取群申请列表（未处理的申请）
     * @param \Cfwf\Micro_service\Im_group\GetGroupApplyListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupApplyList(\Cfwf\Micro_service\Im_group\GetGroupApplyListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGroupApplyList',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGroupApplyListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 申请加入群
     * @param \Cfwf\Micro_service\Im_group\InsertAskEnterGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertAskEnterGroup(\Cfwf\Micro_service\Im_group\InsertAskEnterGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/InsertAskEnterGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\InsertAskEnterGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 处理群申请
     * @param \Cfwf\Micro_service\Im_group\DealGroupApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DealGroupApply(\Cfwf\Micro_service\Im_group\DealGroupApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/DealGroupApply',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 进入群
     * 不用申请，直接加入
     * @param \Cfwf\Micro_service\Im_group\EnterGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EnterGroup(\Cfwf\Micro_service\Im_group\EnterGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/EnterGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 离开群
     * @param \Cfwf\Micro_service\Im_group\LeaveGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaveGroup(\Cfwf\Micro_service\Im_group\LeaveGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/LeaveGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除群成员
     * @param \Cfwf\Micro_service\Im_group\RemoveGruopMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveGruopMember(\Cfwf\Micro_service\Im_group\RemoveGruopMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/RemoveGruopMember',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取群公告/通知列表
     * @param \Cfwf\Micro_service\Im_group\GetGroupInformListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupInformList(\Cfwf\Micro_service\Im_group\GetGroupInformListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGroupInformList',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGroupInformListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发布群公告/通知
     * @param \Cfwf\Micro_service\Im_group\InsertGruopInformRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertGruopInform(\Cfwf\Micro_service\Im_group\InsertGruopInformRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/InsertGruopInform',
        $argument,
        ['\Cfwf\Micro_service\Im_group\InsertGruopInformResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发送通用计数型消息
     * @param \Cfwf\Micro_service\Im_group\BroadcastCounterMsgToMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BroadcastCounterMsgToMembers(\Cfwf\Micro_service\Im_group\BroadcastCounterMsgToMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/BroadcastCounterMsgToMembers',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发送通用一般消息
     * @param \Cfwf\Micro_service\Im_group\BroadcastCommonMsgToMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BroadcastCommonMsgToMembers(\Cfwf\Micro_service\Im_group\BroadcastCommonMsgToMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/BroadcastCommonMsgToMembers',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除群公告/通知
     * @param \Cfwf\Micro_service\Im_group\DeleteGroupInformRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteGroupInform(\Cfwf\Micro_service\Im_group\DeleteGroupInformRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/DeleteGroupInform',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加群聊天
     * @param \Cfwf\Micro_service\Im_group\InsertGroupSpeakRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertGruopSpeak(\Cfwf\Micro_service\Im_group\InsertGroupSpeakRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/InsertGruopSpeak',
        $argument,
        ['\Cfwf\Micro_service\Im_group\InsertGruopSpeakResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取群聊天列表
     * @param \Cfwf\Micro_service\Im_group\GetGroupSpeakListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupSpeakList(\Cfwf\Micro_service\Im_group\GetGroupSpeakListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGroupSpeakList',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGroupSpeakListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取群信息
     * @param \Cfwf\Micro_service\Im_group\GetGruopInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGruopInfo(\Cfwf\Micro_service\Im_group\GetGruopInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/GetGruopInfo',
        $argument,
        ['\Cfwf\Micro_service\Im_group\GetGruopInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建群
     * @param \Cfwf\Micro_service\Im_group\InsertNewGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InsertNewGroup(\Cfwf\Micro_service\Im_group\InsertNewGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/InsertNewGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\InsertNewGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 解散群
     * @param \Cfwf\Micro_service\Im_group\DeleteGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteGroup(\Cfwf\Micro_service\Im_group\DeleteGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/DeleteGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\CommonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 搜索自己所在群群内成员
     * @param \Cfwf\Micro_service\Im_group\SearchGroupMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchGroupMember(\Cfwf\Micro_service\Im_group\SearchGroupMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SearchGroupMember',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SearchGroupMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 搜索自己所在群
     * @param \Cfwf\Micro_service\Im_group\SearchGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchGroup(\Cfwf\Micro_service\Im_group\SearchGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SearchGroup',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SearchGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 搜索群聊
     * @param \Cfwf\Micro_service\Im_group\SearchGroupInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchGroupInfo(\Cfwf\Micro_service\Im_group\SearchGroupInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SearchGroupInfo',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SearchGroupInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置超级管理员
     * @param \Cfwf\Micro_service\Im_group\SetSuperAdminRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSuperAdmin(\Cfwf\Micro_service\Im_group\SetSuperAdminRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SetSuperAdmin',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SetSuperAdminRespnse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置一般管理员
     * @param \Cfwf\Micro_service\Im_group\SetAdminsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetAdmins(\Cfwf\Micro_service\Im_group\SetAdminsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SetAdmins',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SetAdminsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 修改群名称
     * @param \Cfwf\Micro_service\Im_group\SetGroupNameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetGroupName(\Cfwf\Micro_service\Im_group\SetGroupNameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.im_group.IM_Group/SetGroupName',
        $argument,
        ['\Cfwf\Micro_service\Im_group\SetGroupNameResponse', 'decode'],
        $metadata, $options);
    }

}
