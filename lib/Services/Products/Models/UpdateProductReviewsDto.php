<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductReviewsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductReviewsDto
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
     * @var array&lt;UpdateProductReviewObjectDto&gt;
     */
    public array $reviews;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $status;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of UpdateProductReviewObjectDto objects
        if (isset($data['reviews']) && is_array($data['reviews'])) {
            $this->reviews = array_map(function($item) {
                return is_array($item) ? new UpdateProductReviewObjectDto($item) : $item;
            }, $data['reviews']);
        } else {
            $this->reviews = $data['reviews'] ?? [];
        }
        $this->status = $data['status'] ?? null;
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
        if ($this->reviews !== null) {
            $result['reviews'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->reviews);
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
