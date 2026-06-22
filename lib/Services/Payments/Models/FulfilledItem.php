<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * FulfilledItem model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class FulfilledItem
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
     * @var mixed
     */
    public $product;

    /**
     * @var mixed
     */
    public $price;

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
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->product = $data['product'] ?? null;
        $this->price = $data['price'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->qty !== null) {
            $result['qty'] = $this->qty;
        }
        return $result;
    }
}
