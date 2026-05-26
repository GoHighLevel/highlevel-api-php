<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * UpdateFollowupSettingsDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class UpdateFollowupSettingsDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $action_ids;

    /**
     * @var FollowupSettings
     */
    public FollowupSettings $followup_settings;

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
        $this->action_ids = $data['actionIds'] ?? [];
        // Handle single FollowupSettings object
        if (isset($data['followupSettings']) && is_array($data['followupSettings'])) {
            $this->followup_settings = new FollowupSettings($data['followupSettings']);
        } else {
            $this->followup_settings = $data['followupSettings'] ?? null;
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
