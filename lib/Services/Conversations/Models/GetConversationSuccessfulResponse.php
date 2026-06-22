<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetConversationSuccessfulResponse model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetConversationSuccessfulResponse
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var mixed
     */
    public $conversation;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->conversation = $data['conversation'] ?? null;
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
        if ($this->conversation !== null) {
            $result['conversation'] = $this->conversation;
        }
        return $result;
    }
}
