<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * GetInventoryResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class GetInventoryResponseDto
{
    /**
     * @var array&lt;InventoryItemDto&gt;
     */
    public array $inventory;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of InventoryItemDto objects
        if (isset($data['inventory']) && is_array($data['inventory'])) {
            $this->inventory = array_map(function($item) {
                return is_array($item) ? new InventoryItemDto($item) : $item;
            }, $data['inventory']);
        } else {
            $this->inventory = $data['inventory'] ?? [];
        }
        $this->total = $data['total'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->inventory !== null) {
            $result['inventory'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->inventory);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
