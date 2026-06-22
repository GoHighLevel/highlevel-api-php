<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * ListPricesResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ListPricesResponseDto
{
    /**
     * @var array&lt;DefaultPriceResponseDto&gt;
     */
    public array $prices;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of DefaultPriceResponseDto objects
        if (isset($data['prices']) && is_array($data['prices'])) {
            $this->prices = array_map(function($item) {
                return is_array($item) ? new DefaultPriceResponseDto($item) : $item;
            }, $data['prices']);
        } else {
            $this->prices = $data['prices'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->prices !== null) {
            $result['prices'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->prices);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
