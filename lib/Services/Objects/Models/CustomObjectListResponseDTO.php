<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectListResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectListResponseDTO
{
    /**
     * @var array&lt;ICustomObjectSchema&gt;|null
     */
    public ?array $objects = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ICustomObjectSchema objects
        if (isset($data['objects']) && is_array($data['objects'])) {
            $this->objects = array_map(function($item) {
                return is_array($item) ? new ICustomObjectSchema($item) : $item;
            }, $data['objects']);
        } else {
            $this->objects = $data['objects'] ?? null;
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
        if ($this->objects !== null) {
            $result['objects'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->objects);
        }
        return $result;
    }
}
