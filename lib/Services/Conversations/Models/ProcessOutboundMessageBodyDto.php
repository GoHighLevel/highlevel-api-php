<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * ProcessOutboundMessageBodyDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ProcessOutboundMessageBodyDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $conversation_provider_id;

    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var string|null
     */
    public ?string $date = null;

    /**
     * @var mixed
     */
    public $call;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->attachments = $data['attachments'] ?? null;
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->conversation_provider_id = $data['conversationProviderId'] ?? '';
        $this->alt_id = $data['altId'] ?? null;
        $this->date = $data['date'] ?? null;
        $this->call = $data['call'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->conversation_provider_id !== null) {
            $result['conversationProviderId'] = $this->conversation_provider_id;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->call !== null) {
            $result['call'] = $this->call;
        }
        return $result;
    }
}
