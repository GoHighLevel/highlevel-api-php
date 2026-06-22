<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * GetMessagesByConversationResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetMessagesByConversationResponseDto
{
    /**
     * @var string
     */
    public string $last_message_id;

    /**
     * @var bool
     */
    public bool $next_page;

    /**
     * @var array&lt;GetMessageResponseDto&gt;
     */
    public array $messages;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->last_message_id = $data['lastMessageId'] ?? '';
        $this->next_page = $data['nextPage'] ?? false;
        // Handle array of GetMessageResponseDto objects
        if (isset($data['messages']) && is_array($data['messages'])) {
            $this->messages = array_map(function($item) {
                return is_array($item) ? new GetMessageResponseDto($item) : $item;
            }, $data['messages']);
        } else {
            $this->messages = $data['messages'] ?? [];
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
        if ($this->last_message_id !== null) {
            $result['lastMessageId'] = $this->last_message_id;
        }
        if ($this->next_page !== null) {
            $result['nextPage'] = $this->next_page;
        }
        if ($this->messages !== null) {
            $result['messages'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->messages);
        }
        return $result;
    }
}
