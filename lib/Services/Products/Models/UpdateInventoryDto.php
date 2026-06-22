<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * UpdateInventoryDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateInventoryDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var array&lt;UpdateInventoryItemDto&gt;
     */
    public array $items;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of UpdateInventoryItemDto objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new UpdateInventoryItemDto($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        return $result;
    }
}
