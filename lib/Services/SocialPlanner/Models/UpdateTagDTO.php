<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UpdateTagDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UpdateTagDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $tag_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tag_ids = $data['tagIds'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tag_ids !== null) {
            $result['tagIds'] = $this->tag_ids;
        }
        return $result;
    }
}
