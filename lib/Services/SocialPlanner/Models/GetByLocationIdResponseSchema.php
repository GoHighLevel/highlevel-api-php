<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetByLocationIdResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetByLocationIdResponseSchema
{
    /**
     * @var float
     */
    public float $count;

    /**
     * @var array&lt;CategorySchema&gt;
     */
    public array $categories;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? 0;
        // Handle array of CategorySchema objects
        if (isset($data['categories']) && is_array($data['categories'])) {
            $this->categories = array_map(function($item) {
                return is_array($item) ? new CategorySchema($item) : $item;
            }, $data['categories']);
        } else {
            $this->categories = $data['categories'] ?? [];
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
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->categories !== null) {
            $result['categories'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->categories);
        }
        return $result;
    }
}
