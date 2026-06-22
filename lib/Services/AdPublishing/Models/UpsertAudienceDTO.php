<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertAudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpsertAudienceDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var mixed
     */
    public $dimensions;

    /**
     * @var mixed
     */
    public $exclusion_dimension;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->resource_name = $data['resourceName'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->dimensions = $data['dimensions'] ?? null;
        $this->exclusion_dimension = $data['exclusionDimension'] ?? null;
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
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->exclusion_dimension !== null) {
            $result['exclusionDimension'] = $this->exclusion_dimension;
        }
        return $result;
    }
}
