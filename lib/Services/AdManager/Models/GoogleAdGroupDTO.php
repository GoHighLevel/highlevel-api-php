<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleAdGroupDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
    public mixed $keywords;

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
    public mixed $audience;

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
