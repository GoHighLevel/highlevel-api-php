<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchQueueByIdResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchQueueByIdResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var mixed
     */
    public $queue;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        $this->queue = $data['queue'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->queue !== null) {
            $result['queue'] = $this->queue;
        }
        return $result;
    }
}
