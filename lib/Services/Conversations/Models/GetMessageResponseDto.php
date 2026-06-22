<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetMessageResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetMessageResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var float
     */
    public float $type;

    /**
     * @var string
     */
    public string $message_type;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string
     */
    public string $direction;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string
     */
    public string $content_type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var MessageMeta|null
     */
    public ?MessageMeta $meta = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $conversation_provider_id = null;

    /**
     * @var string|null
     */
    public ?string $chat_widget_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->type = $data['type'] ?? 0;
        $this->message_type = $data['messageType'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->body = $data['body'] ?? null;
        $this->direction = $data['direction'] ?? '';
        $this->status = $data['status'] ?? null;
        $this->content_type = $data['contentType'] ?? '';
        $this->attachments = $data['attachments'] ?? null;
        // Handle single MessageMeta object
        if (isset($data['meta']) && is_array($data['meta'])) {
            $this->meta = new MessageMeta($data['meta']);
        } else {
            $this->meta = $data['meta'] ?? null;
        }
        $this->source = $data['source'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->conversation_provider_id = $data['conversationProviderId'] ?? null;
        $this->chat_widget_id = $data['chatWidgetId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->message_type !== null) {
            $result['messageType'] = $this->message_type;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->direction !== null) {
            $result['direction'] = $this->direction;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->content_type !== null) {
            $result['contentType'] = $this->content_type;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->meta !== null) {
            $result['meta'] = is_object($this->meta) && method_exists($this->meta, 'toArray') 
                ? $this->meta->toArray() 
                : $this->meta;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->conversation_provider_id !== null) {
            $result['conversationProviderId'] = $this->conversation_provider_id;
        }
        if ($this->chat_widget_id !== null) {
            $result['chatWidgetId'] = $this->chat_widget_id;
        }
        return $result;
    }
}
