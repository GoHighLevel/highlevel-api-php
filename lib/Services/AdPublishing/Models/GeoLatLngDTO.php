<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GeoLatLngDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GeoLatLngDTO
{
    /**
     * @var float|null
     */
    public ?float $lat = null;

    /**
     * @var float|null
     */
    public ?float $lng = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->lat = $data['lat'] ?? null;
        $this->lng = $data['lng'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->lat !== null) {
            $result['lat'] = $this->lat;
        }
        if ($this->lng !== null) {
            $result['lng'] = $this->lng;
        }
        return $result;
    }
}
