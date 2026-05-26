<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FetchAIResponseDetailsResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FetchAIResponseDetailsResponseDTO
{
    /**
     * @var string
     */
    public string $prompt;

    /**
     * @var string|null
     */
    public ?string $intent = null;

    /**
     * @var string
     */
    public string $response_message;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $faqs = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $website = null;

    /**
     * @var string|null
     */
    public ?string $agent_id = null;

    /**
     * @var string|null
     */
    public ?string $input = null;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $action_logs;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $history;

    /**
     * @var string|null
     */
    public ?string $mode = null;

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
        $this->prompt = $data['prompt'] ?? '';
        $this->intent = $data['intent'] ?? null;
        $this->response_message = $data['responseMessage'] ?? '';
        $this->faqs = $data['faqs'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->agent_id = $data['agentId'] ?? null;
        $this->input = $data['input'] ?? null;
        $this->action_logs = $data['actionLogs'] ?? [];
        $this->history = $data['history'] ?? [];
        $this->mode = $data['mode'] ?? null;
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
