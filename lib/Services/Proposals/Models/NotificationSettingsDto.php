<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * NotificationSettingsDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class NotificationSettingsDto
{
    /**
     * @var NotificationSendSettingDto
     */
    public NotificationSendSettingDto $receive;

    /**
     * @var NotificationSenderSettingDto
     */
    public NotificationSenderSettingDto $sender;

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
        // Handle single NotificationSendSettingDto object
        if (isset($data['receive']) && is_array($data['receive'])) {
            $this->receive = new NotificationSendSettingDto($data['receive']);
        } else {
            $this->receive = $data['receive'] ?? null;
        }
        // Handle single NotificationSenderSettingDto object
        if (isset($data['sender']) && is_array($data['sender'])) {
            $this->sender = new NotificationSenderSettingDto($data['sender']);
        } else {
            $this->sender = $data['sender'] ?? null;
        }
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
