<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * SendReviewReplyDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class SendReviewReplyDto
{
    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $message;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->message = $data['message'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
