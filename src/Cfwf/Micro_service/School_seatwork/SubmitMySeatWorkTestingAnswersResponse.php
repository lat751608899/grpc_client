<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_seatwork.proto

namespace Cfwf\Micro_service\School_seatwork;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_seatwork.SubmitMySeatWorkTestingAnswersResponse</code>
 */
class SubmitMySeatWorkTestingAnswersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SubmitMySeatWorkTestingAnswersResponse.CMD_RESULT result = 1;</code>
     */
    private $result = 0;
    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存随堂检测信息
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkInfo seatwork_info = 2;</code>
     */
    private $seatwork_info = null;
    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存我的得分
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkStatus my_status = 3;</code>
     */
    private $my_status = null;

    public function __construct() {
        \GPBMetadata\SchoolSeatwork::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SubmitMySeatWorkTestingAnswersResponse.CMD_RESULT result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SubmitMySeatWorkTestingAnswersResponse.CMD_RESULT result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\School_seatwork\SubmitMySeatWorkTestingAnswersResponse_CMD_RESULT::class);
        $this->result = $var;

        return $this;
    }

    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存随堂检测信息
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkInfo seatwork_info = 2;</code>
     * @return \Cfwf\Micro_service\School_seatwork\SeatWorkInfo
     */
    public function getSeatworkInfo()
    {
        return $this->seatwork_info;
    }

    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存随堂检测信息
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkInfo seatwork_info = 2;</code>
     * @param \Cfwf\Micro_service\School_seatwork\SeatWorkInfo $var
     * @return $this
     */
    public function setSeatworkInfo($var)
    {
        GPBUtil::checkMessage($var, \Cfwf\Micro_service\School_seatwork\SeatWorkInfo::class);
        $this->seatwork_info = $var;

        return $this;
    }

    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存我的得分
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkStatus my_status = 3;</code>
     * @return \Cfwf\Micro_service\School_seatwork\SeatWorkStatus
     */
    public function getMyStatus()
    {
        return $this->my_status;
    }

    /**
     *如果返回kCmdResultSuccess/kCmdResultHasFinished/kCmdResultHasTimeout，保存我的得分
     *
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkStatus my_status = 3;</code>
     * @param \Cfwf\Micro_service\School_seatwork\SeatWorkStatus $var
     * @return $this
     */
    public function setMyStatus($var)
    {
        GPBUtil::checkMessage($var, \Cfwf\Micro_service\School_seatwork\SeatWorkStatus::class);
        $this->my_status = $var;

        return $this;
    }

}
