<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetCategorySchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetCategorySchema
{
    /**
     * @var mixed
     */
    public $category;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->category = $data['category'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        return $result;
    }
}
