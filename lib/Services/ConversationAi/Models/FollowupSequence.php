<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FollowupSequence model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FollowupSequence
{
    /**
     * @var float
     */
    public float $id;

    /**
     * @var string
     */
    public string $followup_time_unit;

    /**
     * @var float
     */
    public float $followup_time;

    /**
     * @var bool|null
     */
    public ?bool $ai_enabled_message = null;

    /**
     * @var bool|null
     */
    public ?bool $trigger_workflow = null;

    /**
     * @var string|null
     */
    public ?string $custom_message = null;

    /**
     * @var string|null
     */
    public ?string $workflow_id = null;

    /**
     * @var bool|null
     */
    public ?bool $contact_requested = null;

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
        $this->id = $data['id'] ?? 0;
        $this->followup_time_unit = $data['followupTimeUnit'] ?? '';
        $this->followup_time = $data['followupTime'] ?? 0;
        $this->ai_enabled_message = $data['aiEnabledMessage'] ?? null;
        $this->trigger_workflow = $data['triggerWorkflow'] ?? null;
        $this->custom_message = $data['customMessage'] ?? null;
        $this->workflow_id = $data['workflowId'] ?? null;
        $this->contact_requested = $data['contactRequested'] ?? null;
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
