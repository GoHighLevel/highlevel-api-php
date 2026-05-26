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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
