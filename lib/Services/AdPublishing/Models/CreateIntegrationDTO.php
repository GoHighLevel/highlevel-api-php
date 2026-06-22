<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateIntegrationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateIntegrationDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $page_id;

    /**
     * @var string|null
     */
    public ?string $ad_account_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->page_id = $data['pageId'] ?? '';
        $this->ad_account_id = $data['adAccountId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->page_id !== null) {
            $result['pageId'] = $this->page_id;
        }
        if ($this->ad_account_id !== null) {
            $result['adAccountId'] = $this->ad_account_id;
        }
        return $result;
    }
}
