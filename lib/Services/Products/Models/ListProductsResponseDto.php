<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * ListProductsResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ListProductsResponseDto
{
    /**
     * @var array&lt;DefaultProductResponseDto&gt;
     */
    public array $products;

    /**
     * @var array&lt;ListProductsStats&gt;
     */
    public array $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of DefaultProductResponseDto objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new DefaultProductResponseDto($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
        }
        // Handle array of ListProductsStats objects
        if (isset($data['total']) && is_array($data['total'])) {
            $this->total = array_map(function($item) {
                return is_array($item) ? new ListProductsStats($item) : $item;
            }, $data['total']);
        } else {
            $this->total = $data['total'] ?? [];
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
        if ($this->products !== null) {
            $result['products'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->products);
        }
        if ($this->total !== null) {
            $result['total'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->total);
        }
        return $result;
    }
}
