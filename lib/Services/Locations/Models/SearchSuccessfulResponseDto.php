<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SearchSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SearchSuccessfulResponseDto
{
    /**
     * @var array&lt;GetLocationSchema&gt;|null
     */
    public ?array $locations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetLocationSchema objects
        if (isset($data['locations']) && is_array($data['locations'])) {
            $this->locations = array_map(function($item) {
                return is_array($item) ? new GetLocationSchema($item) : $item;
            }, $data['locations']);
        } else {
            $this->locations = $data['locations'] ?? null;
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
        if ($this->locations !== null) {
            $result['locations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->locations);
        }
        return $result;
    }
}
