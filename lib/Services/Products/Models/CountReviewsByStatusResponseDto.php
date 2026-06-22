<?php

namespace HighLevel\Services\Products\Models;

/**
 * CountReviewsByStatusResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CountReviewsByStatusResponseDto
{
    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data['data'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
