<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LinkedInUpdateAdStatusBodyDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LinkedInUpdateAdStatusBodyDTO
{
    /**
     * @var string
     */
    public string $operation_type;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->operation_type = $data['operationType'] ?? '';
        $this->type = $data['type'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->operation_type !== null) {
            $result['operationType'] = $this->operation_type;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
