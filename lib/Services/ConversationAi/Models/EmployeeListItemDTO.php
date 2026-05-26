<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * EmployeeListItemDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class EmployeeListItemDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var string
     */
    public string $mode;

    /**
     * @var array&lt;string&gt;
     */
    public array $channels;

    /**
     * @var float
     */
    public float $wait_time;

    /**
     * @var string
     */
    public string $wait_time_unit;

    /**
     * @var bool
     */
    public bool $sleep_enabled;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;
     */
    public array $actions;

    /**
     * @var bool
     */
    public bool $is_primary;

    /**
     * @var float
     */
    public float $auto_pilot_max_messages;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $goal = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $knowledge_base_ids = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var bool|null
     */
    public ?bool $sleep_on_manual_message = null;

    /**
     * @var bool|null
     */
    public ?bool $sleep_on_workflow_message = null;

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
        $this->name = $data['name'] ?? '';
        $this->business_name = $data['businessName'] ?? null;
        $this->mode = $data['mode'] ?? '';
        $this->channels = $data['channels'] ?? [];
        $this->wait_time = $data['waitTime'] ?? 0;
        $this->wait_time_unit = $data['waitTimeUnit'] ?? '';
        $this->sleep_enabled = $data['sleepEnabled'] ?? false;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->actions = $data['actions'] ?? [];
        $this->is_primary = $data['isPrimary'] ?? false;
        $this->auto_pilot_max_messages = $data['autoPilotMaxMessages'] ?? 0;
        $this->goal = $data['goal'] ?? null;
        $this->knowledge_base_ids = $data['knowledgeBaseIds'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->sleep_on_manual_message = $data['sleepOnManualMessage'] ?? null;
        $this->sleep_on_workflow_message = $data['sleepOnWorkflowMessage'] ?? null;
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
