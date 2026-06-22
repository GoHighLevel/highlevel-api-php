<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * GetConversationChannelListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetConversationChannelListSuccessfulResponseDto
{
    /**
     * @var ConversationChannelSchema
     */
    public ConversationChannelSchema $conversation_channel;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single ConversationChannelSchema object
        if (isset($data['conversationChannel']) && is_array($data['conversationChannel'])) {
            $this->conversation_channel = new ConversationChannelSchema($data['conversationChannel']);
        } else {
            $this->conversation_channel = $data['conversationChannel'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->conversation_channel !== null) {
            $result['conversationChannel'] = is_object($this->conversation_channel) && method_exists($this->conversation_channel, 'toArray') 
                ? $this->conversation_channel->toArray() 
                : $this->conversation_channel;
        }
        return $result;
    }
}
