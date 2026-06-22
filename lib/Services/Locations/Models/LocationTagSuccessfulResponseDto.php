<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * LocationTagSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class LocationTagSuccessfulResponseDto
{
    /**
     * @var LocationTagsSchema|null
     */
    public ?LocationTagsSchema $tag = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single LocationTagsSchema object
        if (isset($data['tag']) && is_array($data['tag'])) {
            $this->tag = new LocationTagsSchema($data['tag']);
        } else {
            $this->tag = $data['tag'] ?? null;
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
        if ($this->tag !== null) {
            $result['tag'] = is_object($this->tag) && method_exists($this->tag, 'toArray') 
                ? $this->tag->toArray() 
                : $this->tag;
        }
        return $result;
    }
}
