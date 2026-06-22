<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * InventoryItemDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class InventoryItemDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var float
     */
    public float $available_quantity;

    /**
     * @var string
     */
    public string $sku;

    /**
     * @var bool
     */
    public bool $allow_out_of_stock_purchases;

    /**
     * @var string
     */
    public string $product;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $image = null;

    /**
     * @var string|null
     */
    public ?string $product_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->available_quantity = $data['availableQuantity'] ?? 0;
        $this->sku = $data['sku'] ?? '';
        $this->allow_out_of_stock_purchases = $data['allowOutOfStockPurchases'] ?? false;
        $this->product = $data['product'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->image = $data['image'] ?? null;
        $this->product_name = $data['productName'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->available_quantity !== null) {
            $result['availableQuantity'] = $this->available_quantity;
        }
        if ($this->sku !== null) {
            $result['sku'] = $this->sku;
        }
        if ($this->allow_out_of_stock_purchases !== null) {
            $result['allowOutOfStockPurchases'] = $this->allow_out_of_stock_purchases;
        }
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->product_name !== null) {
            $result['productName'] = $this->product_name;
        }
        return $result;
    }
}
