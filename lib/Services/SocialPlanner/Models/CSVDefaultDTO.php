<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CSVDefaultDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CSVDefaultDTO
{
    /**
     * @var string
     */
    public string $user_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->user_id = $data['userId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
