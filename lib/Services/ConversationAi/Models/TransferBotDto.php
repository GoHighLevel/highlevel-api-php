<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * transferBotDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class TransferBotDto
{
    /**
     * @var string
     */
    public string $transfer_bot_type;

    /**
     * @var string
     */
    public string $transfer_to_bot;

    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string|null
     */
    public ?string $transfer_bot_trigger_condition = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $transfer_bot_examples = null;

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
        $this->transfer_bot_type = $data['transferBotType'] ?? '';
        $this->transfer_to_bot = $data['transferToBot'] ?? '';
        $this->enabled = $data['enabled'] ?? false;
        $this->transfer_bot_trigger_condition = $data['transferBotTriggerCondition'] ?? null;
        $this->transfer_bot_examples = $data['transferBotExamples'] ?? null;
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
