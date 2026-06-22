<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * UpdateInventoryItemDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateInventoryItemDto
{
    /**
     * @var string
     */
    public string $price_id;

    /**
     * @var float|null
     */
    public ?float $available_quantity = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_out_of_stock_purchases = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->price_id = $data['priceId'] ?? '';
        $this->available_quantity = $data['availableQuantity'] ?? null;
        $this->allow_out_of_stock_purchases = $data['allowOutOfStockPurchases'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        if ($this->available_quantity !== null) {
            $result['availableQuantity'] = $this->available_quantity;
        }
        if ($this->allow_out_of_stock_purchases !== null) {
            $result['allowOutOfStockPurchases'] = $this->allow_out_of_stock_purchases;
        }
        return $result;
    }
}
