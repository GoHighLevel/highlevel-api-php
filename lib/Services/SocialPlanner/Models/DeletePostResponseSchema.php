<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DeletePostResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DeletePostResponseSchema
{
    /**
     * @var string
     */
    public string $post_id;

    /**
     * @var mixed
     */
    public $csv;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->post_id = $data['postId'] ?? '';
        $this->csv = $data['csv'] ?? null;
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
        if ($this->csv !== null) {
            $result['csv'] = $this->csv;
        }
        return $result;
    }
}
