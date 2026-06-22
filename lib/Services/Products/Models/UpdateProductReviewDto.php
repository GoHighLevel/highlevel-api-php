<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductReviewDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductReviewDto
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
    public string $product_id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var array&lt;ProductReviewDto&gt;|null
     */
    public ?array $reply = null;

    /**
     * @var float|null
     */
    public ?float $rating = null;

    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $detail = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->product_id = $data['productId'] ?? '';
        $this->status = $data['status'] ?? '';
        // Handle array of ProductReviewDto objects
        if (isset($data['reply']) && is_array($data['reply'])) {
            $this->reply = array_map(function($item) {
                return is_array($item) ? new ProductReviewDto($item) : $item;
            }, $data['reply']);
        } else {
            $this->reply = $data['reply'] ?? null;
        }
        $this->rating = $data['rating'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->detail = $data['detail'] ?? null;
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
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->reply !== null) {
            $result['reply'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->reply);
        }
        if ($this->rating !== null) {
            $result['rating'] = $this->rating;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->detail !== null) {
            $result['detail'] = $this->detail;
        }
        return $result;
    }
}
