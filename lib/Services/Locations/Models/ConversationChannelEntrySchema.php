<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * ConversationChannelEntrySchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class ConversationChannelEntrySchema
{
    /**
     * @var ConversationProviderSchema
     */
    public ConversationProviderSchema $conversation_provider;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single ConversationProviderSchema object
        if (isset($data['conversationProvider']) && is_array($data['conversationProvider'])) {
            $this->conversation_provider = new ConversationProviderSchema($data['conversationProvider']);
        } else {
            $this->conversation_provider = $data['conversationProvider'] ?? null;
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
        if ($this->conversation_provider !== null) {
            $result['conversationProvider'] = is_object($this->conversation_provider) && method_exists($this->conversation_provider, 'toArray') 
                ? $this->conversation_provider->toArray() 
                : $this->conversation_provider;
        }
        return $result;
    }
}
