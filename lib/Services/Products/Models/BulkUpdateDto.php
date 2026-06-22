<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * BulkUpdateDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkUpdateDto
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
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;
     */
    public array $product_ids;

    /**
     * @var mixed
     */
    public $filters;

    /**
     * @var mixed
     */
    public $price;

    /**
     * @var mixed
     */
    public $compare_at_price;

    /**
     * @var bool|null
     */
    public ?bool $availability = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $collection_ids = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->product_ids = $data['productIds'] ?? [];
        $this->filters = $data['filters'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->compare_at_price = $data['compareAtPrice'] ?? null;
        $this->availability = $data['availability'] ?? null;
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->currency = $data['currency'] ?? null;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->product_ids !== null) {
            $result['productIds'] = $this->product_ids;
        }
        if ($this->filters !== null) {
            $result['filters'] = $this->filters;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->compare_at_price !== null) {
            $result['compareAtPrice'] = $this->compare_at_price;
        }
        if ($this->availability !== null) {
            $result['availability'] = $this->availability;
        }
        if ($this->collection_ids !== null) {
            $result['collectionIds'] = $this->collection_ids;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        return $result;
    }
}
