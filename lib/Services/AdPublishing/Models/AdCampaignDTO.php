<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AdCampaignDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
    public $locale;

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
    public $audience;

    /**
     * @var mixed
     */
    public $unit_cost;

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
        if ($this->locale !== null) {
            $result['locale'] = $this->locale;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->media_type !== null) {
            $result['mediaType'] = $this->media_type;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->unit_cost !== null) {
            $result['unitCost'] = $this->unit_cost;
        }
        if ($this->campaign_type !== null) {
            $result['campaignType'] = $this->campaign_type;
        }
        if ($this->ad_campaign_group_id !== null) {
            $result['adCampaignGroupId'] = $this->ad_campaign_group_id;
        }
        if ($this->ad_campaign_id !== null) {
            $result['adCampaignId'] = $this->ad_campaign_id;
        }
        if ($this->ads !== null) {
            $result['ads'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ads);
        }
        if ($this->linked_in_error !== null) {
            $result['linkedInError'] = $this->linked_in_error;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
