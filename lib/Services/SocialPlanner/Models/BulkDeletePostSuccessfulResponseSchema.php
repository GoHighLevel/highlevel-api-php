<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * BulkDeletePostSuccessfulResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class BulkDeletePostSuccessfulResponseSchema
{
    /**
     * @var float|null
     */
    public ?float $deleted_count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->deleted_count = $data['deletedCount'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->deleted_count !== null) {
            $result['deletedCount'] = $this->deleted_count;
        }
        return $result;
    }
}
