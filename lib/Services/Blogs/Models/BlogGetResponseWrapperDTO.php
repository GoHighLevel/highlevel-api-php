<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs\Models;

/**
 * BlogGetResponseWrapperDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class BlogGetResponseWrapperDTO
{
    /**
     * @var array&lt;BlogResponseDTO&gt;
     */
    public array $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BlogResponseDTO objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new BlogResponseDTO($item) : $item;
            }, $data['data']);
        } else {
            $this->data = $data['data'] ?? [];
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
        if ($this->data !== null) {
            $result['data'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->data);
        }
        return $result;
    }
}
