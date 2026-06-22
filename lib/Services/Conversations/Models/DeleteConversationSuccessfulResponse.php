<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * DeleteConversationSuccessfulResponse model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class DeleteConversationSuccessfulResponse
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
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
        return $result;
    }
}
