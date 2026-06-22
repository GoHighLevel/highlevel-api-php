<?php

namespace HighLevel\Services\Store\Models;

/**
 * ListShippingZoneResponseDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ListShippingZoneResponseDto
{
    /**
     * @var float
     */
    public float $total;

    /**
     * @var array&lt;ShippingZoneSchema&gt;
     */
    public array $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total = $data['total'] ?? 0;
        // Handle array of ShippingZoneSchema objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new ShippingZoneSchema($item) : $item;
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->data !== null) {
            $result['data'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->data);
        }
        return $result;
    }
}
