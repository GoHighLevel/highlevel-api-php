<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * TeamMemberResponse model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class TeamMemberResponse
{
    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var float|null
     */
    public ?float $priority = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location_type = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var bool|null
     */
    public ?bool $is_primary = null;

    /**
     * @var array&lt;LocationConfigurationResponse&gt;|null
     */
    public ?array $location_configurations = null;

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
        $this->user_id = $data['userId'] ?? '';
        $this->priority = $data['priority'] ?? null;
        $this->meeting_location_type = $data['meetingLocationType'] ?? null;
        $this->meeting_location = $data['meetingLocation'] ?? null;
        $this->is_primary = $data['isPrimary'] ?? null;
        // Handle array of LocationConfigurationResponse objects
        if (isset($data['locationConfigurations']) && is_array($data['locationConfigurations'])) {
            $this->location_configurations = array_map(function($item) {
                return is_array($item) ? new LocationConfigurationResponse($item) : $item;
            }, $data['locationConfigurations']);
        } else {
            $this->location_configurations = $data['locationConfigurations'] ?? null;
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
