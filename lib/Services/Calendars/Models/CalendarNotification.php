<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarNotification model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarNotification
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var bool
     */
    public bool $should_send_to_contact;

    /**
     * @var bool
     */
    public bool $should_send_to_guest;

    /**
     * @var bool
     */
    public bool $should_send_to_user;

    /**
     * @var bool
     */
    public bool $should_send_to_selected_users;

    /**
     * @var string
     */
    public string $selected_users;

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
        $this->type = $data['type'] ?? null;
        $this->should_send_to_contact = $data['shouldSendToContact'] ?? false;
        $this->should_send_to_guest = $data['shouldSendToGuest'] ?? false;
        $this->should_send_to_user = $data['shouldSendToUser'] ?? false;
        $this->should_send_to_selected_users = $data['shouldSendToSelectedUsers'] ?? false;
        $this->selected_users = $data['selectedUsers'] ?? '';
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
