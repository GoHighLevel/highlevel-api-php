<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomFieldSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomFieldSuccessfulResponseDto
{
    /**
     * @var CustomFieldSchema|null
     */
    public ?CustomFieldSchema $custom_field = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single CustomFieldSchema object
        if (isset($data['customField']) && is_array($data['customField'])) {
            $this->custom_field = new CustomFieldSchema($data['customField']);
        } else {
            $this->custom_field = $data['customField'] ?? null;
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
        if ($this->custom_field !== null) {
            $result['customField'] = is_object($this->custom_field) && method_exists($this->custom_field, 'toArray') 
                ? $this->custom_field->toArray() 
                : $this->custom_field;
        }
        return $result;
    }
}
