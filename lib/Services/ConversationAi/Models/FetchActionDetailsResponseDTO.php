<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * fetchActionDetailsResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FetchActionDetailsResponseDTO
{
    /**
     * @var mixed
     */
    public $data;

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
        $this->data = $data['data'] ?? null;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
