<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomFieldsListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomFieldsListSuccessfulResponseDto
{
    /**
     * @var array&lt;CustomFieldSchema&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CustomFieldSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
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
        if ($this->custom_fields !== null) {
            $result['customFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_fields);
        }
        return $result;
    }
}
