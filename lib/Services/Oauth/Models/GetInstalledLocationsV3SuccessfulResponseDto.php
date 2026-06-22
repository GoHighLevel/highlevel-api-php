<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth\Models;

/**
 * GetInstalledLocationsV3SuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetInstalledLocationsV3SuccessfulResponseDto
{
    /**
     * @var array&lt;InstalledLocationSchema&gt;
     */
    public array $items;

    /**
     * @var mixed
     */
    public $pagination;

    /**
     * @var mixed
     */
    public $metadata;

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
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new InstalledLocationSchema($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->pagination = $data['pagination'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
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
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        if ($this->metadata !== null) {
            $result['metadata'] = $this->metadata;
        }
        if ($this->install_to_future_locations !== null) {
            $result['installToFutureLocations'] = $this->install_to_future_locations;
        }
        return $result;
    }
}
