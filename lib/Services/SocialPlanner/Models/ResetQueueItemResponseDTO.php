<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * ResetQueueItemResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class ResetQueueItemResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var mixed
     */
    public $queue_item;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        $this->queue_item = $data['queueItem'] ?? null;
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
        if ($this->queue_item !== null) {
            $result['queueItem'] = $this->queue_item;
        }
        return $result;
    }
}
