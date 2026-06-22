<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth\Models;

/**
 * GetInstalledLocationsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetInstalledLocationsSuccessfulResponseDto
{
    /**
     * @var array&lt;InstalledLocationSchema&gt;|null
     */
    public ?array $locations = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var bool|null
     */
    public ?bool $install_to_future_locations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of InstalledLocationSchema objects
        if (isset($data['locations']) && is_array($data['locations'])) {
            $this->locations = array_map(function($item) {
                return is_array($item) ? new InstalledLocationSchema($item) : $item;
            }, $data['locations']);
        } else {
            $this->locations = $data['locations'] ?? null;
        }
        $this->count = $data['count'] ?? null;
        $this->install_to_future_locations = $data['installToFutureLocations'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->locations !== null) {
            $result['locations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->locations);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->install_to_future_locations !== null) {
            $result['installToFutureLocations'] = $this->install_to_future_locations;
        }
        return $result;
    }
}
