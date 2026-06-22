<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * ProductReviewDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ProductReviewDto
{
    /**
     * @var string
     */
    public string $headline;

    /**
     * @var string
     */
    public string $comment;

    /**
     * @var mixed
     */
    public $user;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->headline = $data['headline'] ?? '';
        $this->comment = $data['comment'] ?? '';
        $this->user = $data['user'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->user !== null) {
            $result['user'] = $this->user;
        }
        return $result;
    }
}
