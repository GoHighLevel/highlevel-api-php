<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchCategoryQueuesDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchCategoryQueuesDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
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
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        return $result;
    }
}
