<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductStoreDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductStoreDto
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
    public string $action;

    /**
     * @var array&lt;string&gt;
     */
    public array $product_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->action = $data['action'] ?? '';
        $this->product_ids = $data['productIds'] ?? [];
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
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->product_ids !== null) {
            $result['productIds'] = $this->product_ids;
        }
        return $result;
    }
}
