<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: view_stat.proto

namespace Cfwf\Micro_service\View_stat;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cfwf.micro_service.view_stat.SearchViewCountRequest</code>
 */
class SearchViewCountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *要查询的资源的ID
     *
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     */
    private $id;
    /**
     *观看产品类型	
     *
     * Generated from protobuf field <code>.cfwf.micro_service.view_stat.VIEW_PRODUCT_TYPE product_type = 2;</code>
     */
    private $product_type = 0;

    public function __construct() {
        \GPBMetadata\ViewStat::initOnce();
        parent::__construct();
    }

    /**
     *要查询的资源的ID
     *
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *要查询的资源的ID
     *
     * Generated from protobuf field <code>repeated int64 id = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->id = $arr;

        return $this;
    }

    /**
     *观看产品类型	
     *
     * Generated from protobuf field <code>.cfwf.micro_service.view_stat.VIEW_PRODUCT_TYPE product_type = 2;</code>
     * @return int
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     *观看产品类型	
     *
     * Generated from protobuf field <code>.cfwf.micro_service.view_stat.VIEW_PRODUCT_TYPE product_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProductType($var)
    {
        GPBUtil::checkEnum($var, \Cfwf\Micro_service\View_stat\VIEW_PRODUCT_TYPE::class);
        $this->product_type = $var;

        return $this;
    }

}

