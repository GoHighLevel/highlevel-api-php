<?php

namespace HighLevel\Services\Products\Models;

/**
 * BulkEditRequestDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkEditRequestDto
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
     * @var array&lt;BulkEditProductDto&gt;
     */
    public array $products;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of BulkEditProductDto objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new BulkEditProductDto($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
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
        if ($this->products !== null) {
            $result['products'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->products);
        }
        return $result;
    }
}
