<?php

namespace HighLevel\Services\Payments\Models;

/**
 * ListOrdersResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ListOrdersResponseDto
{
    /**
     * @var array&lt;OrderResponseSchema&gt;
     */
    public array $data;

    /**
     * @var float
     */
    public float $total_count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of OrderResponseSchema objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new OrderResponseSchema($item) : $item;
            }, $data['data']);
        } else {
            $this->data = $data['data'] ?? [];
        }
        $this->total_count = $data['totalCount'] ?? 0;
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
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        return $result;
    }
}
