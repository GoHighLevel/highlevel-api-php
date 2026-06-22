<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceLocationListResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceLocationListResponseDTO
{
    /**
     * @var array&lt;ServiceLocationResponseDTO&gt;
     */
    public array $service_locations;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ServiceLocationResponseDTO objects
        if (isset($data['serviceLocations']) && is_array($data['serviceLocations'])) {
            $this->service_locations = array_map(function($item) {
                return is_array($item) ? new ServiceLocationResponseDTO($item) : $item;
            }, $data['serviceLocations']);
        } else {
            $this->service_locations = $data['serviceLocations'] ?? [];
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
        if ($this->service_locations !== null) {
            $result['serviceLocations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->service_locations);
        }
        return $result;
    }
}
