<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * CampaignDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
    public mixed $budget;

    /**
     * @var mixed
     */
    public mixed $audience;

    /**
     * @var mixed
     */
    public mixed $network_settings;

    /**
     * @var mixed
     */
    public mixed $bidding_strategy;

    /**
     * @var mixed
     */
    public mixed $assets;

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
    public mixed $campaign_goal;

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
