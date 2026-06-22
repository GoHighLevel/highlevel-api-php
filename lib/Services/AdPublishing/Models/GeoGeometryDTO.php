<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GeoGeometryDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GeoGeometryDTO
{
    /**
     * @var mixed
     */
    public $location;

    /**
     * @var string|null
     */
    public ?string $location_type = null;

    /**
     * @var mixed
     */
    public $viewport;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location = $data['location'] ?? null;
        $this->location_type = $data['locationType'] ?? null;
        $this->viewport = $data['viewport'] ?? null;
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
        if ($this->viewport !== null) {
            $result['viewport'] = $this->viewport;
        }
        return $result;
    }
}
