<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * UpdateTaskStatusParams model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class UpdateTaskStatusParams
{
    /**
     * @var bool
     */
    public bool $completed;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->completed = $data['completed'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->completed !== null) {
            $result['completed'] = $this->completed;
        }
        return $result;
    }
}
