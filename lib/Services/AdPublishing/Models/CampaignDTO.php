<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CampaignDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CampaignDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $advertising_channel_type;

    /**
     * @var string|null
     */
    public ?string $advertising_channel_sub_type = null;

    /**
     * @var string|null
     */
    public ?string $goal_type = null;

    /**
     * @var mixed
     */
    public $budget;

    /**
     * @var mixed
     */
    public $audience;

    /**
     * @var mixed
     */
    public $network_settings;

    /**
     * @var mixed
     */
    public $bidding_strategy;

    /**
     * @var mixed
     */
    public $assets;

    /**
     * @var bool|null
     */
    public ?bool $is_eu_political_ads = null;

    /**
     * @var array&lt;GoogleAdGroupDTO&gt;|null
     */
    public ?array $ad_groups = null;

    /**
     * @var mixed
     */
    public $campaign_goal;

    /**
     * @var array&lt;GoogleAdScheduleDTO&gt;|null
     */
    public ?array $ad_schedule = null;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $google_ad_account_id = null;

    /**
     * @var bool|null
     */
    public ?bool $unpublished_changes = null;

    /**
     * @var float|null
     */
    public ?float $maximum_cpc = null;

    /**
     * @var string|null
     */
    public ?string $google_campaign_id = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $advanced_options = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->advertising_channel_type = $data['advertisingChannelType'] ?? '';
        $this->advertising_channel_sub_type = $data['advertisingChannelSubType'] ?? null;
        $this->goal_type = $data['goalType'] ?? null;
        $this->budget = $data['budget'] ?? null;
        $this->audience = $data['audience'] ?? null;
        $this->network_settings = $data['networkSettings'] ?? null;
        $this->bidding_strategy = $data['biddingStrategy'] ?? null;
        $this->assets = $data['assets'] ?? null;
        $this->is_eu_political_ads = $data['isEuPoliticalAds'] ?? null;
        // Handle array of GoogleAdGroupDTO objects
        if (isset($data['adGroups']) && is_array($data['adGroups'])) {
            $this->ad_groups = array_map(function($item) {
                return is_array($item) ? new GoogleAdGroupDTO($item) : $item;
            }, $data['adGroups']);
        } else {
            $this->ad_groups = $data['adGroups'] ?? null;
        }
        $this->campaign_goal = $data['campaignGoal'] ?? null;
        // Handle array of GoogleAdScheduleDTO objects
        if (isset($data['adSchedule']) && is_array($data['adSchedule'])) {
            $this->ad_schedule = array_map(function($item) {
                return is_array($item) ? new GoogleAdScheduleDTO($item) : $item;
            }, $data['adSchedule']);
        } else {
            $this->ad_schedule = $data['adSchedule'] ?? null;
        }
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->google_ad_account_id = $data['googleAdAccountId'] ?? null;
        $this->unpublished_changes = $data['unpublishedChanges'] ?? null;
        $this->maximum_cpc = $data['maximumCpc'] ?? null;
        $this->google_campaign_id = $data['googleCampaignId'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->advanced_options = $data['advancedOptions'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->advertising_channel_type !== null) {
            $result['advertisingChannelType'] = $this->advertising_channel_type;
        }
        if ($this->advertising_channel_sub_type !== null) {
            $result['advertisingChannelSubType'] = $this->advertising_channel_sub_type;
        }
        if ($this->goal_type !== null) {
            $result['goalType'] = $this->goal_type;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->network_settings !== null) {
            $result['networkSettings'] = $this->network_settings;
        }
        if ($this->bidding_strategy !== null) {
            $result['biddingStrategy'] = $this->bidding_strategy;
        }
        if ($this->assets !== null) {
            $result['assets'] = $this->assets;
        }
        if ($this->is_eu_political_ads !== null) {
            $result['isEuPoliticalAds'] = $this->is_eu_political_ads;
        }
        if ($this->ad_groups !== null) {
            $result['adGroups'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_groups);
        }
        if ($this->campaign_goal !== null) {
            $result['campaignGoal'] = $this->campaign_goal;
        }
        if ($this->ad_schedule !== null) {
            $result['adSchedule'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_schedule);
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->google_ad_account_id !== null) {
            $result['googleAdAccountId'] = $this->google_ad_account_id;
        }
        if ($this->unpublished_changes !== null) {
            $result['unpublishedChanges'] = $this->unpublished_changes;
        }
        if ($this->maximum_cpc !== null) {
            $result['maximumCpc'] = $this->maximum_cpc;
        }
        if ($this->google_campaign_id !== null) {
            $result['googleCampaignId'] = $this->google_campaign_id;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->advanced_options !== null) {
            $result['advancedOptions'] = $this->advanced_options;
        }
        return $result;
    }
}
