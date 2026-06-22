<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceDTO
{
    /**
     * @var array&lt;GeoLocationDTO&gt;|null
     */
    public ?array $geo_locations = null;

    /**
     * @var mixed
     */
    public $target_audience;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GeoLocationDTO objects
        if (isset($data['geoLocations']) && is_array($data['geoLocations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new GeoLocationDTO($item) : $item;
            }, $data['geoLocations']);
        } else {
            $this->geo_locations = $data['geoLocations'] ?? null;
        }
        $this->target_audience = $data['targetAudience'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->geo_locations !== null) {
            $result['geoLocations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->geo_locations);
        }
        if ($this->target_audience !== null) {
            $result['targetAudience'] = $this->target_audience;
        }
        return $result;
    }
}
