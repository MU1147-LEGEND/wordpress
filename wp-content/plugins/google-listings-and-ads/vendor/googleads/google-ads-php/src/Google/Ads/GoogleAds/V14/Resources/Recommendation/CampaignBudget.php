<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V14\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign budget shared amongst various budget recommendation types.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Recommendation.CampaignBudget</code>
 */
class CampaignBudget extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Current budget amount.
     *
     * Generated from protobuf field <code>int64 current_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_amount_micros = 0;
    /**
     * Output only. Recommended budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_new_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_new_amount_micros = 0;
    /**
     * Output only. The date when the new budget would start being used.
     * This field will be set for the following recommendation types:
     * FORECASTING_SET_TARGET_ROAS. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>string new_start_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $new_start_date = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $current_amount_micros
     *           Output only. Current budget amount.
     *     @type int|string $recommended_new_amount_micros
     *           Output only. Recommended budget amount.
     *     @type string $new_start_date
     *           Output only. The date when the new budget would start being used.
     *           This field will be set for the following recommendation types:
     *           FORECASTING_SET_TARGET_ROAS. YYYY-MM-DD format, for example, 2018-04-17.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Current budget amount.
     *
     * Generated from protobuf field <code>int64 current_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCurrentAmountMicros()
    {
        return $this->current_amount_micros;
    }

    /**
     * Output only. Current budget amount.
     *
     * Generated from protobuf field <code>int64 current_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->current_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Recommended budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_new_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedNewAmountMicros()
    {
        return $this->recommended_new_amount_micros;
    }

    /**
     * Output only. Recommended budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_new_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedNewAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_new_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The date when the new budget would start being used.
     * This field will be set for the following recommendation types:
     * FORECASTING_SET_TARGET_ROAS. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>string new_start_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNewStartDate()
    {
        return $this->new_start_date;
    }

    /**
     * Output only. The date when the new budget would start being used.
     * This field will be set for the following recommendation types:
     * FORECASTING_SET_TARGET_ROAS. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>string new_start_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNewStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_start_date = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignBudget::class, \Google\Ads\GoogleAds\V14\Resources\Recommendation_CampaignBudget::class);

