<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * CreateEmployeeDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class CreateEmployeeDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var string|null
     */
    public ?string $mode = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $channels = null;

    /**
     * @var bool|null
     */
    public ?bool $is_primary = null;

    /**
     * @var float|null
     */
    public ?float $wait_time = null;

    /**
     * @var string|null
     */
    public ?string $wait_time_unit = null;

    /**
     * @var bool|null
     */
    public ?bool $sleep_enabled = null;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var string
     */
    public string $personality;

    /**
     * @var string
     */
    public string $goal;

    /**
     * @var string
     */
    public string $instructions;

    /**
     * @var float|null
     */
    public ?float $auto_pilot_max_messages = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $knowledge_base_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $respond_to_images = null;

    /**
     * @var bool|null
     */
    public ?bool $respond_to_audio = null;

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
        $this->name = $data['name'] ?? '';
        $this->business_name = $data['businessName'] ?? null;
        $this->mode = $data['mode'] ?? null;
        $this->channels = $data['channels'] ?? null;
        $this->is_primary = $data['isPrimary'] ?? null;
        $this->wait_time = $data['waitTime'] ?? null;
        $this->wait_time_unit = $data['waitTimeUnit'] ?? null;
        $this->sleep_enabled = $data['sleepEnabled'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->personality = $data['personality'] ?? '';
        $this->goal = $data['goal'] ?? '';
        $this->instructions = $data['instructions'] ?? '';
        $this->auto_pilot_max_messages = $data['autoPilotMaxMessages'] ?? null;
        $this->knowledge_base_ids = $data['knowledgeBaseIds'] ?? null;
        $this->respond_to_images = $data['respondToImages'] ?? null;
        $this->respond_to_audio = $data['respondToAudio'] ?? null;
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
