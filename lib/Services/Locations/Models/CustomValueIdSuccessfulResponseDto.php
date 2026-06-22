<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomValueIdSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomValueIdSuccessfulResponseDto
{
    /**
     * @var CustomValueSchema|null
     */
    public ?CustomValueSchema $custom_value = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single CustomValueSchema object
        if (isset($data['customValue']) && is_array($data['customValue'])) {
            $this->custom_value = new CustomValueSchema($data['customValue']);
        } else {
            $this->custom_value = $data['customValue'] ?? null;
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
        if ($this->custom_value !== null) {
            $result['customValue'] = is_object($this->custom_value) && method_exists($this->custom_value, 'toArray') 
                ? $this->custom_value->toArray() 
                : $this->custom_value;
        }
        return $result;
    }
}
