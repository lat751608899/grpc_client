<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: school_seatwork.proto

namespace Cfwf\Micro_service\School_seatwork;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.school_seatwork.SendSeatWorkRequest</code>
 */
class SendSeatWorkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkInfo seatwork_info = 2;</code>
     */
    private $seatwork_info = null;

    public function __construct() {
        \GPBMetadata\SchoolSeatwork::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cfwf.micro_service.school_seatwork.SeatWorkInfo seatwork_info = 2;</code>
     * @return \Cfwf\Micro_service\School_seatwork\SeatWorkInfo
     */
    public function getSeatworkInfo()
    {
        return $this->seatwork_info;
    }

    /**
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

}
