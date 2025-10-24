<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetConversationByIdResponse model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetConversationByIdResponse
{
    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var bool
     */
    public bool $inbox;

    /**
     * @var float
     */
    public float $type;

    /**
     * @var float
     */
    public float $unread_count;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool|null
     */
    public ?bool $starred = null;

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
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->inbox = $data['inbox'] ?? false;
        $this->type = $data['type'] ?? 0;
        $this->unread_count = $data['unreadCount'] ?? 0;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->id = $data['id'] ?? '';
        $this->starred = $data['starred'] ?? null;
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
