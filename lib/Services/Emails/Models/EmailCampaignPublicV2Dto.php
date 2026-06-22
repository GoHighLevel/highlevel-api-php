<?php

namespace HighLevel\Services\Emails\Models;

/**
 * EmailCampaignPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class EmailCampaignPublicV2Dto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $campaign_type = null;

    /**
     * @var string|null
     */
    public ?string $campaign_category = null;

    /**
     * @var array&lt;EmailCampaignVariationPublicV2Dto&gt;|null
     */
    public ?array $variations = null;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->source = $data['source'] ?? null;
        $this->source_id = $data['sourceId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->campaign_type = $data['campaignType'] ?? null;
        $this->campaign_category = $data['campaignCategory'] ?? null;
        // Handle array of EmailCampaignVariationPublicV2Dto objects
        if (isset($data['variations']) && is_array($data['variations'])) {
            $this->variations = array_map(function($item) {
                return is_array($item) ? new EmailCampaignVariationPublicV2Dto($item) : $item;
            }, $data['variations']);
        } else {
            $this->variations = $data['variations'] ?? null;
        }
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->campaign_type !== null) {
            $result['campaignType'] = $this->campaign_type;
        }
        if ($this->campaign_category !== null) {
            $result['campaignCategory'] = $this->campaign_category;
        }
        if ($this->variations !== null) {
            $result['variations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variations);
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
