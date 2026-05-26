<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * humanHandOverDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class HumanHandOverDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string
     */
    public string $trigger_condition;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $examples = null;

    /**
     * @var string|null
     */
    public ?string $assign_to_user_id = null;

    /**
     * @var bool|null
     */
    public ?bool $skip_assign_to_user = null;

    /**
     * @var bool|null
     */
    public ?bool $create_task = null;

    /**
     * @var bool
     */
    public bool $reactivate_enabled;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string
     */
    public string $final_message;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string
     */
    public string $handover_type;

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
        $this->enabled = $data['enabled'] ?? false;
        $this->trigger_condition = $data['triggerCondition'] ?? '';
        $this->examples = $data['examples'] ?? null;
        $this->assign_to_user_id = $data['assignToUserId'] ?? null;
        $this->skip_assign_to_user = $data['skipAssignToUser'] ?? null;
        $this->create_task = $data['createTask'] ?? null;
        $this->reactivate_enabled = $data['reactivateEnabled'] ?? false;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->final_message = $data['finalMessage'] ?? '';
        $this->tags = $data['tags'] ?? null;
        $this->handover_type = $data['handoverType'] ?? '';
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
