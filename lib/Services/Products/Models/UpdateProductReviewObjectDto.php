<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductReviewObjectDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductReviewObjectDto
{
    /**
     * @var string
     */
    public string $review_id;

    /**
     * @var string
     */
    public string $product_id;

    /**
     * @var string
     */
    public string $store_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->review_id = $data['reviewId'] ?? '';
        $this->product_id = $data['productId'] ?? '';
        $this->store_id = $data['storeId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->review_id !== null) {
            $result['reviewId'] = $this->review_id;
        }
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->store_id !== null) {
            $result['storeId'] = $this->store_id;
        }
        return $result;
    }
}
