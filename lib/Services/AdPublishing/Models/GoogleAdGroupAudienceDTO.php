<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAdGroupAudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleAdGroupAudienceDTO
{
    /**
     * @var array&lt;GoogleGeoLocationDTO&gt;|null
     */
    public ?array $geo_locations = null;

    /**
     * @var array&lt;GoogleLocaleDTO&gt;|null
     */
    public ?array $locales = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GoogleGeoLocationDTO objects
        if (isset($data['geoLocations']) && is_array($data['geoLocations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new GoogleGeoLocationDTO($item) : $item;
            }, $data['geoLocations']);
        } else {
            $this->geo_locations = $data['geoLocations'] ?? null;
        }
        // Handle array of GoogleLocaleDTO objects
        if (isset($data['locales']) && is_array($data['locales'])) {
            $this->locales = array_map(function($item) {
                return is_array($item) ? new GoogleLocaleDTO($item) : $item;
            }, $data['locales']);
        } else {
            $this->locales = $data['locales'] ?? null;
        }
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
        if ($this->locales !== null) {
            $result['locales'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->locales);
        }
        return $result;
    }
}
