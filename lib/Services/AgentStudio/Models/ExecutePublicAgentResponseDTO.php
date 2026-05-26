<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * ExecutePublicAgentResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class ExecutePublicAgentResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $execution_id;

    /**
     * @var string
     */
    public string $interaction_id;

    /**
     * @var string
     */
    public string $response;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $next_expected_input;

    /**
     * @var bool
     */
    public bool $goal_completion;

    /**
     * @var string
     */
    public string $execution_status;

    /**
     * @var bool
     */
    public bool $flow_switch;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $attachments;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $generative_outputs;

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
        $this->success = $data['success'] ?? false;
        $this->execution_id = $data['executionId'] ?? '';
        $this->interaction_id = $data['interactionId'] ?? '';
        $this->response = $data['response'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->next_expected_input = $data['nextExpectedInput'] ?? '';
        $this->goal_completion = $data['goalCompletion'] ?? false;
        $this->execution_status = $data['executionStatus'] ?? '';
        $this->flow_switch = $data['flowSwitch'] ?? false;
        $this->attachments = $data['attachments'] ?? [];
        $this->generative_outputs = $data['generativeOutputs'] ?? [];
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
