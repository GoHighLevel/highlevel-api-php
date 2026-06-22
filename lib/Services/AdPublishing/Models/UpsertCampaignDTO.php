<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertCampaignDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpsertCampaignDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $objective = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $special_ad_categories = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->objective = $data['objective'] ?? null;
        $this->special_ad_categories = $data['specialAdCategories'] ?? null;
        $this->source = $data['source'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->objective !== null) {
            $result['objective'] = $this->objective;
        }
        if ($this->special_ad_categories !== null) {
            $result['specialAdCategories'] = $this->special_ad_categories;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }
}
