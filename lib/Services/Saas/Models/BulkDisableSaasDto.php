<?php

namespace HighLevel\Services\Saas\Models;

/**
 * BulkDisableSaasDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class BulkDisableSaasDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $location_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_ids = $data['locationIds'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_ids !== null) {
            $result['locationIds'] = $this->location_ids;
        }
        return $result;
    }
}
