<?php

namespace HighLevel\Services\Products\Models;

/**
 * GetProductStatsResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class GetProductStatsResponseDto
{
    /**
     * @var float
     */
    public float $total_products;

    /**
     * @var float
     */
    public float $included_in_store;

    /**
     * @var float
     */
    public float $excluded_from_store;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total_products = $data['totalProducts'] ?? 0;
        $this->included_in_store = $data['includedInStore'] ?? 0;
        $this->excluded_from_store = $data['excludedFromStore'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->total_products !== null) {
            $result['totalProducts'] = $this->total_products;
        }
        if ($this->included_in_store !== null) {
            $result['includedInStore'] = $this->included_in_store;
        }
        if ($this->excluded_from_store !== null) {
            $result['excludedFromStore'] = $this->excluded_from_store;
        }
        return $result;
    }
}
