<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * EmployeeResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class EmployeeResponseDTO
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
     * @var array&lt;ActionsIdDto&gt;
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
     * @var string|null
     */
    public ?string $goal = null;

    /**
     * @var string|null
     */
    public ?string $personality = null;

    /**
     * @var string|null
     */
    public ?string $instructions = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $knowledge_base_ids = null;

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
        // Handle array of ActionsIdDto objects
        if (isset($data['actions']) && is_array($data['actions'])) {
            $this->actions = array_map(function($item) {
                return is_array($item) ? new ActionsIdDto($item) : $item;
            }, $data['actions']);
        } else {
            $this->actions = $data['actions'] ?? [];
        }
        $this->is_primary = $data['isPrimary'] ?? false;
        $this->auto_pilot_max_messages = $data['autoPilotMaxMessages'] ?? 0;
        $this->goal = $data['goal'] ?? null;
        $this->personality = $data['personality'] ?? null;
        $this->instructions = $data['instructions'] ?? null;
        $this->knowledge_base_ids = $data['knowledgeBaseIds'] ?? null;
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
