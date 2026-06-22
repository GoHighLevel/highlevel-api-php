<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceLocationGeometry model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceLocationGeometry
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $location;

    /**
     * @var string
     */
    public string $location_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location = $data['location'] ?? null;
        $this->location_type = $data['locationType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location !== null) {
            $result['location'] = $this->location;
        }
        if ($this->location_type !== null) {
            $result['locationType'] = $this->location_type;
        }
        return $result;
    }
}
