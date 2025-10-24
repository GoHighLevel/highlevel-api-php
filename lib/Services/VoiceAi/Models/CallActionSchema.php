<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallActionSchema model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallActionSchema
{
    /**
     * @var string|null
     */
    public ?string $action_id = null;

    /**
     * @var string
     */
    public string $action_type;

    /**
     * @var string
     */
    public string $action_name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var mixed
     */
    public mixed $action_parameters;

    /**
     * @var string|null
     */
    public ?string $executed_at = null;

    /**
     * @var string|null
     */
    public ?string $trigger_received_at = null;

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
        $this->action_id = $data['actionId'] ?? null;
        $this->action_type = $data['actionType'] ?? '';
        $this->action_name = $data['actionName'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->action_parameters = $data['actionParameters'] ?? null;
        $this->executed_at = $data['executedAt'] ?? null;
        $this->trigger_received_at = $data['triggerReceivedAt'] ?? null;
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
