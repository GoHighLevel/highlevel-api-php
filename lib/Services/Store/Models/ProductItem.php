<?php

namespace HighLevel\Services\Store\Models;

/**
 * ProductItem model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ProductItem
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var float
     */
    public float $qty;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->qty = $data['qty'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->qty !== null) {
            $result['qty'] = $this->qty;
        }
        return $result;
    }
}
