<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DeletePostsDto model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DeletePostsDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $post_ids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->post_ids = $data['postIds'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->post_ids !== null) {
            $result['postIds'] = $this->post_ids;
        }
        return $result;
    }
}
