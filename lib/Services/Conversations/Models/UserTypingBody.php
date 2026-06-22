<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * UserTypingBody model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UserTypingBody
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $is_typing;

    /**
     * @var string
     */
    public string $visitor_id;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->is_typing = $data['isTyping'] ?? '';
        $this->visitor_id = $data['visitorId'] ?? '';
        $this->conversation_id = $data['conversationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->is_typing !== null) {
            $result['isTyping'] = $this->is_typing;
        }
        if ($this->visitor_id !== null) {
            $result['visitorId'] = $this->visitor_id;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        return $result;
    }
}
