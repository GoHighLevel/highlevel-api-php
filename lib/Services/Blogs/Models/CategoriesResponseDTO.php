<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * CategoriesResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class CategoriesResponseDTO
{
    /**
     * @var array&lt;CategoryResponseDTO&gt;
     */
    public array $categories;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CategoryResponseDTO objects
        if (isset($data['categories']) && is_array($data['categories'])) {
            $this->categories = array_map(function($item) {
                return is_array($item) ? new CategoryResponseDTO($item) : $item;
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
        if ($this->categories !== null) {
            $result['categories'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->categories);
        }
        return $result;
    }
}
