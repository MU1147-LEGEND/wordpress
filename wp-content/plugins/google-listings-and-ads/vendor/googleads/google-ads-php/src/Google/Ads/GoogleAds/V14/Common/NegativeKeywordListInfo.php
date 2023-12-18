<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Negative Keyword List criterion. Represents a shared set
 * of negative keywords that can be excluded at the account-level.
 * Only one negative keyword list criterion can be attached per account.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.NegativeKeywordListInfo</code>
 */
class NegativeKeywordListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The NegativeKeywordListInfo shared set resource name.
     *
     * Generated from protobuf field <code>optional string shared_set = 1;</code>
     */
    protected $shared_set = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $shared_set
     *           The NegativeKeywordListInfo shared set resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The NegativeKeywordListInfo shared set resource name.
     *
     * Generated from protobuf field <code>optional string shared_set = 1;</code>
     * @return string
     */
    public function getSharedSet()
    {
        return isset($this->shared_set) ? $this->shared_set : '';
    }

    public function hasSharedSet()
    {
        return isset($this->shared_set);
    }

    public function clearSharedSet()
    {
        unset($this->shared_set);
    }

    /**
     * The NegativeKeywordListInfo shared set resource name.
     *
     * Generated from protobuf field <code>optional string shared_set = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSharedSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->shared_set = $var;

        return $this;
    }

}

