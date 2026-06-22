<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * SendConversationResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class SendConversationResponseDto
{
    /**
     * @var array&lt;ConversationSchema&gt;
     */
    public array $conversations;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ConversationSchema objects
        if (isset($data['conversations']) && is_array($data['conversations'])) {
            $this->conversations = array_map(function($item) {
                return is_array($item) ? new ConversationSchema($item) : $item;
            }, $data['conversations']);
        } else {
            $this->conversations = $data['conversations'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->conversations !== null) {
            $result['conversations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->conversations);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
