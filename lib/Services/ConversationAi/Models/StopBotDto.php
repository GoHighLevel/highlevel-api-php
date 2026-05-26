<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * stopBotDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class StopBotDto
{
    /**
     * @var string
     */
    public string $stop_bot_detection_type;

    /**
     * @var string
     */
    public string $stop_bot_trigger_condition;

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
     * @var bool
     */
    public bool $enabled;

    /**
     * @var array&lt;string&gt;
     */
    public array $stop_bot_examples;

    /**
     * @var string
     */
    public string $final_message;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

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
        $this->stop_bot_detection_type = $data['stopBotDetectionType'] ?? '';
        $this->stop_bot_trigger_condition = $data['stopBotTriggerCondition'] ?? '';
        $this->reactivate_enabled = $data['reactivateEnabled'] ?? false;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->enabled = $data['enabled'] ?? false;
        $this->stop_bot_examples = $data['stopBotExamples'] ?? [];
        $this->final_message = $data['finalMessage'] ?? '';
        $this->tags = $data['tags'] ?? null;
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
