<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Cfwf\Message;

/**
 * Protobuf enum <code>Cfwf\Message\CommonMessage\MESSAGE_TYPE</code>
 */
class CommonMessage_MESSAGE_TYPE
{
    /**
     *不被使用
     *
     * Generated from protobuf enum <code>kMsgTypeNone = 0;</code>
     */
    const kMsgTypeNone = 0;
    /**
     *1-10: 广播类
     *
     * Generated from protobuf enum <code>kMsgTypeSystemBroadcast = 1;</code>
     */
    const kMsgTypeSystemBroadcast = 1;
    /**
     *单位广播： 如学校广播等
     *
     * Generated from protobuf enum <code>kMsgTypeOrgBroadcast = 2;</code>
     */
    const kMsgTypeOrgBroadcast = 2;
    /**
     *11-30: 好友群组类
     *
     * Generated from protobuf enum <code>kMsgTypeFriendChat = 11;</code>
     */
    const kMsgTypeFriendChat = 11;
    /**
     *群组聊天       由 im_group 微服务发出     from_userid:发言人id  send_to:群组id
     *
     * Generated from protobuf enum <code>kMsgTypeGroupChat = 12;</code>
     */
    const kMsgTypeGroupChat = 12;
    /**
     *群组通知       由 im_group 微服务发出     from_userid:发布人id  send_to:群组id
     *
     * Generated from protobuf enum <code>kMsgTypeGroupInform = 13;</code>
     */
    const kMsgTypeGroupInform = 13;
    /**
     *申请加好友     由 im_friends 微服务发出   from_userid:申请方id  send_to:对方id         content:申请时填写的验证信息
     *
     * Generated from protobuf enum <code>kMsgTypeAddFriendApply = 14;</code>
     */
    const kMsgTypeAddFriendApply = 14;
    /**
     *回复好友申请   由 im_friends 微服务发出   from_userid:申请处理者id  send_to:申请方id   content内容：json格式{"result":"accept/refuse","msg":"XXX同意/拒绝了你的好友申请"}
     *
     * Generated from protobuf enum <code>kMsgTypeAddFriendReply = 15;</code>
     */
    const kMsgTypeAddFriendReply = 15;
    /**
     *申请入群       由 im_group 微服务发出     from_userid:申请者id      send_to:群组的id   content：申请时填写的验证信息
     *
     * Generated from protobuf enum <code>kMsgTypeJoinGroupApply = 16;</code>
     */
    const kMsgTypeJoinGroupApply = 16;
    /**
     *回复申请入群   由 im_group 微服务发出     from_userid:申请处理者id  send_to:申请方id   content内容：json格式{"result":"accept/refuse","msg":"管理员XXX同意/拒绝了你的进群申请"}
     *
     * Generated from protobuf enum <code>kMsgTypeJoinGroupReply = 17;</code>
     */
    const kMsgTypeJoinGroupReply = 17;
    /**
     *解散群         由 im_group 微服务发出,自定义群和协作组群会收到该通知     from_userid:操作者id   send_to:群组id  default_face,custom_face,username:操作者个人信息
     *
     * Generated from protobuf enum <code>kMsgTypeDeleteGroup = 18;</code>
     */
    const kMsgTypeDeleteGroup = 18;
    /**
     *好友对聊同步，发送给自己的其他设备  由 im_friends 微服务发出   from_userid:发言人id  send_to:好友id。消息格式同kMsgTypeFriendChat
     *
     * Generated from protobuf enum <code>kMsgTypeFriendChatSync = 20;</code>
     */
    const kMsgTypeFriendChatSync = 20;
    /**
     *31-40: 系统通知
     *
     * Generated from protobuf enum <code>kMsgTypeCommonInform = 31;</code>
     */
    const kMsgTypeCommonInform = 31;
    /**
     *交易类通知
     *
     * Generated from protobuf enum <code>kMsgTypeTradeInform = 32;</code>
     */
    const kMsgTypeTradeInform = 32;
    /**
     *41-50: 协作组通知
     *
     * Generated from protobuf enum <code>kMsgTypCooperativeInvite = 41;</code>
     */
    const kMsgTypCooperativeInvite = 41;
    /**
     *协作组-申请                              from_userid:申请人id      send_to:协作组id    content内容: json格式， 应包含协作组id
     *
     * Generated from protobuf enum <code>kMsgTypCooperativeApply = 42;</code>
     */
    const kMsgTypCooperativeApply = 42;
    /**
     *协作组-答复申请                          from_userid:申请处理者id  send_to:申请人id    content内容: json格式， 应包含协作组id
     *
     * Generated from protobuf enum <code>kMsgTypCooperativeReply = 43;</code>
     */
    const kMsgTypCooperativeReply = 43;
    /**
     *协作组-动态                              from_userid:动态发布者id  send_to:接收人id    content内容: json格式， 应包含协作组id
     *
     * Generated from protobuf enum <code>kMsgTypCooperativeNews = 44;</code>
     */
    const kMsgTypCooperativeNews = 44;
    /**
     *51-100: 学校内各应用通知
     *群通知
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolInform = 51;</code>
     */
    const kMsgTypeSchoolInform = 51;
    /**
     *全校教师通知  由 im_group 微服务发出      from_userid:通知发布者id  send_to:schoolid    
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolTeacherInform = 52;</code>
     */
    const kMsgTypeSchoolTeacherInform = 52;
    /**
     *年级教师通知  由 im_group 微服务发出      from_userid:通知发布者id  send_to:(学段)+(学届)，如 12017 = 小学2017届    
     *
     * Generated from protobuf enum <code>kMsgTypeGradeTeacherInform = 53;</code>
     */
    const kMsgTypeGradeTeacherInform = 53;
    /**
     *教师分组通知  由 im_group 微服务发出      from_userid:通知发布者id  send_to:groupid    
     *
     * Generated from protobuf enum <code>kMsgTypeTeacherGroupInform = 54;</code>
     */
    const kMsgTypeTeacherGroupInform = 54;
    /**
     *班级通知      由 im_group 微服务发出      from_userid:通知发布者id  send_to:classid    
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolClassInform = 55;</code>
     */
    const kMsgTypeSchoolClassInform = 55;
    /**
     *业务通知
     *kMsgTypeSchoolNewRecordCourse = 61;   //自己的老师发了新微课     （暂不用，已改为使用 统计数字型消息）  
     *kMsgTypeSchoolTimingRecordCourseReceipt = 62;   //定时发布微课时，发送给发布老师自己的发送提醒信息 
     *kMsgTypeSchoolNewHomeWork     = 63;   //自己的老师发了新作业     （暂不用，已改为使用 统计数字型消息）  
     *kMsgTypeSchoolTimingHomeWorkReceipt     = 64;   //定时发布作业时，发送给发布老师自己的发送提醒信息 
     *kMsgTypeSchoolNewSeatWork     = 65;   //自己的老师发了新随堂检测 （暂不用，已改为使用 统计数字型消息）  
     *kMsgTypeSchoolTimingSeatWorkReceipt     = 66;   //定时随堂检测时，发送给发布老师自己的发送提醒信息     
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolResearch = 67;</code>
     */
    const kMsgTypeSchoolResearch = 67;
    /**
     *评课通知		
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolPingKe = 68;</code>
     */
    const kMsgTypeSchoolPingKe = 68;
    /**
     *申请和应答
     *
     * Generated from protobuf enum <code>kMsgTypeStudentJoinClassApply = 71;</code>
     */
    const kMsgTypeStudentJoinClassApply = 71;
    /**
     *老师对学生入班申请做出处理          由 school_student 微服务发出 msgid:对应的申请消息的msgid from_userid:操作的老师的id send_to:申请的学生id content："accept"/"reject"
     *
     * Generated from protobuf enum <code>kMsgTypeStudentJoinClassReply = 72;</code>
     */
    const kMsgTypeStudentJoinClassReply = 72;
    /**
     *学校管理员收到老师发来的入校申请    由 school_teacher 微服务发出    
     *
     * Generated from protobuf enum <code>kMsgTypeTeacherJoinSchoolApply = 73;</code>
     */
    const kMsgTypeTeacherJoinSchoolApply = 73;
    /**
     *学校管理员对老师入校申请做出了处理  由 school_teacher 微服务发出 msgid:对应的申请消息的msgid from_userid:操作的老师的id send_to:申请的老师id content：{"result":"accept"/"reject", "schoolid":schoolid}	
     *
     * Generated from protobuf enum <code>kMsgTypeTeacherJoinSchoolReply = 74;</code>
     */
    const kMsgTypeTeacherJoinSchoolReply = 74;
    /**
     *学生离开了班级，本班老师会收到这个通知 from_userid:离开的学生id send_to:classid content:classid
     *
     * Generated from protobuf enum <code>kMsgTypeStudentLeaveClass = 75;</code>
     */
    const kMsgTypeStudentLeaveClass = 75;
    /**
     *老师将学生移除班级，本班老师和相应学生会收到这个通知 from_userid:执行操作的老师id   send_to:classid content:被移除的studentid       
     *
     * Generated from protobuf enum <code>kMsgTypeRemoveStudentFromClass = 76;</code>
     */
    const kMsgTypeRemoveStudentFromClass = 76;
    /**
     *班主任老师将移除班级，本班其他老师和相应的老师 会收到这个通知 from_userid:执行操作的老师id   send_to:classid content:被移除的teacherid       
     *
     * Generated from protobuf enum <code>kMsgTypeRemoveTeacherFromClass = 77;</code>
     */
    const kMsgTypeRemoveTeacherFromClass = 77;
    /**
     *其他学校业务通知
     *
     * Generated from protobuf enum <code>kMsgTypeSchoolClassActivity = 80;</code>
     */
    const kMsgTypeSchoolClassActivity = 80;
}

