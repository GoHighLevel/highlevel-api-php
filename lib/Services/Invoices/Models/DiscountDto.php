<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * DiscountDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class DiscountDto
{
    /**
     * @var float|null
     */
    public ?float $value = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $valid_on_product_ids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->value = $data['value'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->valid_on_product_ids = $data['validOnProductIds'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->valid_on_product_ids !== null) {
            $result['validOnProductIds'] = $this->valid_on_product_ids;
        }
        return $result;
    }
}
