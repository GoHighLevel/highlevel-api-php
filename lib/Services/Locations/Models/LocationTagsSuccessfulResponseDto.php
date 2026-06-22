<?php

namespace HighLevel\Services\Locations\Models;

/**
 * LocationTagsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class LocationTagsSuccessfulResponseDto
{
    /**
     * @var array&lt;LocationTagsSchema&gt;|null
     */
    public ?array $tags = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of LocationTagsSchema objects
        if (isset($data['tags']) && is_array($data['tags'])) {
            $this->tags = array_map(function($item) {
                return is_array($item) ? new LocationTagsSchema($item) : $item;
            }, $data['tags']);
        } else {
            $this->tags = $data['tags'] ?? null;
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
        if ($this->tags !== null) {
            $result['tags'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->tags);
        }
        return $result;
    }
}
