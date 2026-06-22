<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAdGroupDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleAdGroupDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $ad_group_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_id = null;

    /**
     * @var array&lt;GoogleAdContentDTO&gt;|null
     */
    public ?array $ad_content = null;

    /**
     * @var mixed
     */
    public $keywords;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $ad_group_error = null;

    /**
     * @var string|null
     */
    public ?string $google_ad_group_id = null;

    /**
     * @var bool|null
     */
    public ?bool $custom_channels = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $selected_channels = null;

    /**
     * @var string|null
     */
    public ?string $google_audience_id = null;

    /**
     * @var mixed
     */
    public $audience;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->ad_group_id = $data['adGroupId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->ad_campaign_id = $data['adCampaignId'] ?? null;
        // Handle array of GoogleAdContentDTO objects
        if (isset($data['adContent']) && is_array($data['adContent'])) {
            $this->ad_content = array_map(function($item) {
                return is_array($item) ? new GoogleAdContentDTO($item) : $item;
            }, $data['adContent']);
        } else {
            $this->ad_content = $data['adContent'] ?? null;
        }
        $this->keywords = $data['keywords'] ?? null;
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->ad_group_error = $data['adGroupError'] ?? null;
        $this->google_ad_group_id = $data['googleAdGroupId'] ?? null;
        $this->custom_channels = $data['customChannels'] ?? null;
        $this->selected_channels = $data['selectedChannels'] ?? null;
        $this->google_audience_id = $data['googleAudienceId'] ?? null;
        $this->audience = $data['audience'] ?? null;
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
        if ($this->ad_group_id !== null) {
            $result['adGroupId'] = $this->ad_group_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->ad_campaign_id !== null) {
            $result['adCampaignId'] = $this->ad_campaign_id;
        }
        if ($this->ad_content !== null) {
            $result['adContent'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_content);
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->ad_group_error !== null) {
            $result['adGroupError'] = $this->ad_group_error;
        }
        if ($this->google_ad_group_id !== null) {
            $result['googleAdGroupId'] = $this->google_ad_group_id;
        }
        if ($this->custom_channels !== null) {
            $result['customChannels'] = $this->custom_channels;
        }
        if ($this->selected_channels !== null) {
            $result['selectedChannels'] = $this->selected_channels;
        }
        if ($this->google_audience_id !== null) {
            $result['googleAudienceId'] = $this->google_audience_id;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        return $result;
    }
}
