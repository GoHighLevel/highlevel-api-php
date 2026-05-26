<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FollowupSettings model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FollowupSettings
{
    /**
     * @var bool
     */
    public bool $dynamic_channel_switching;

    /**
     * @var bool|null
     */
    public ?bool $follow_up_hours = null;

    /**
     * @var array&lt;WorkingHours&gt;|null
     */
    public ?array $working_hours = null;

    /**
     * @var string|null
     */
    public ?string $timezone_to_use = null;

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
        $this->dynamic_channel_switching = $data['dynamicChannelSwitching'] ?? false;
        $this->follow_up_hours = $data['followUpHours'] ?? null;
        // Handle array of WorkingHours objects
        if (isset($data['workingHours']) && is_array($data['workingHours'])) {
            $this->working_hours = array_map(function($item) {
                return is_array($item) ? new WorkingHours($item) : $item;
            }, $data['workingHours']);
        } else {
            $this->working_hours = $data['workingHours'] ?? null;
        }
        $this->timezone_to_use = $data['timezoneToUse'] ?? null;
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
