<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * UploadFilesDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UploadFilesDto
{
    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $attachment_urls;

    /**
     * @var string|null
     */
    public ?string $chat_service_sid = null;

    /**
     * @var string|null
     */
    public ?string $is_group_sms = null;

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
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->attachment_urls = $data['attachmentUrls'] ?? [];
        $this->chat_service_sid = $data['chatServiceSid'] ?? null;
        $this->is_group_sms = $data['isGroupSms'] ?? null;
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
