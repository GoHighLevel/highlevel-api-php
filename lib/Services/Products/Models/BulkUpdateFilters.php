<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * BulkUpdateFilters model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkUpdateFilters
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $collection_ids = null;

    /**
     * @var string|null
     */
    public ?string $product_type = null;

    /**
     * @var bool|null
     */
    public ?bool $available_in_store = null;

    /**
     * @var string|null
     */
    public ?string $search = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->product_type = $data['productType'] ?? null;
        $this->available_in_store = $data['availableInStore'] ?? null;
        $this->search = $data['search'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->collection_ids !== null) {
            $result['collectionIds'] = $this->collection_ids;
        }
        if ($this->product_type !== null) {
            $result['productType'] = $this->product_type;
        }
        if ($this->available_in_store !== null) {
            $result['availableInStore'] = $this->available_in_store;
        }
        if ($this->search !== null) {
            $result['search'] = $this->search;
        }
        return $result;
    }
}
