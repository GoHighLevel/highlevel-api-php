<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ConversationSchema model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ConversationSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $last_message_body;

    /**
     * @var string
     */
    public string $last_message_type;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $unread_count;

    /**
     * @var string
     */
    public string $full_name;

    /**
     * @var string
     */
    public string $contact_name;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $phone;

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
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->last_message_body = $data['lastMessageBody'] ?? '';
        $this->last_message_type = $data['lastMessageType'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->unread_count = $data['unreadCount'] ?? 0;
        $this->full_name = $data['fullName'] ?? '';
        $this->contact_name = $data['contactName'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->phone = $data['phone'] ?? '';
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
