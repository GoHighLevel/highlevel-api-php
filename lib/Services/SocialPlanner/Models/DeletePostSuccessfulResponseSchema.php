<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DeletePostSuccessfulResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DeletePostSuccessfulResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $post_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->post_id = $data['postId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->post_id !== null) {
            $result['postId'] = $this->post_id;
        }
        return $result;
    }
}
