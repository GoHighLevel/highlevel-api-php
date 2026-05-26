<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * AdCampaignDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class AdCampaignDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var mixed
     */
    public mixed $locale;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $media_type = null;

    /**
     * @var mixed
     */
    public mixed $audience;

    /**
     * @var mixed
     */
    public mixed $unit_cost;

    /**
     * @var string|null
     */
    public ?string $campaign_type = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_group_id = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_id = null;

    /**
     * @var array&lt;LinkedInAdDTO&gt;|null
     */
    public ?array $ads = null;

    /**
     * @var string|null
     */
    public ?string $linked_in_error = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

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
        $this->locale = $data['locale'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->media_type = $data['mediaType'] ?? null;
        $this->audience = $data['audience'] ?? null;
        $this->unit_cost = $data['unitCost'] ?? null;
        $this->campaign_type = $data['campaignType'] ?? null;
        $this->ad_campaign_group_id = $data['adCampaignGroupId'] ?? null;
        $this->ad_campaign_id = $data['adCampaignId'] ?? null;
        // Handle array of LinkedInAdDTO objects
        if (isset($data['ads']) && is_array($data['ads'])) {
            $this->ads = array_map(function($item) {
                return is_array($item) ? new LinkedInAdDTO($item) : $item;
            }, $data['ads']);
        } else {
            $this->ads = $data['ads'] ?? null;
        }
        $this->linked_in_error = $data['linkedInError'] ?? null;
        $this->meta = $data['meta'] ?? null;
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
