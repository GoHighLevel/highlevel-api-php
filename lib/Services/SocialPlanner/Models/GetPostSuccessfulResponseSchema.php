<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetPostSuccessfulResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetPostSuccessfulResponseSchema
{
    /**
     * @var mixed
     */
    public $post;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->post = $data['post'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->post !== null) {
            $result['post'] = $this->post;
        }
        return $result;
    }
}
