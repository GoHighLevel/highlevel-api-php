<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ConversationDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ConversationDto
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $last_message_body = null;

    /**
     * @var string|null
     */
    public ?string $last_message_date = null;

    /**
     * @var string|null
     */
    public ?string $last_message_type = null;

    /**
     * @var float|null
     */
    public ?float $unread_count = null;

    /**
     * @var bool|null
     */
    public ?bool $inbox = null;

    /**
     * @var bool|null
     */
    public ?bool $starred = null;

    /**
     * @var bool
     */
    public bool $deleted;

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
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->last_message_body = $data['lastMessageBody'] ?? null;
        $this->last_message_date = $data['lastMessageDate'] ?? null;
        $this->last_message_type = $data['lastMessageType'] ?? null;
        $this->unread_count = $data['unreadCount'] ?? null;
        $this->inbox = $data['inbox'] ?? null;
        $this->starred = $data['starred'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
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
