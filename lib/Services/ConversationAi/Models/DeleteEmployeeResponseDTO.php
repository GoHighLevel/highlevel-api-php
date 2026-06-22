<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * DeleteEmployeeResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class DeleteEmployeeResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->id = $data['id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }
}
