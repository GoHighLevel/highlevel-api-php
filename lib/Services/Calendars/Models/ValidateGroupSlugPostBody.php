<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * ValidateGroupSlugPostBody model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ValidateGroupSlugPostBody
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $slug;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->slug = $data['slug'] ?? '';
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
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        return $result;
    }
}
