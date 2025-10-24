<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallLogDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallLogDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string
     */
    public string $agent_id;

    /**
     * @var bool
     */
    public bool $is_agent_deleted;

    /**
     * @var string|null
     */
    public ?string $from_number = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var float
     */
    public float $duration;

    /**
     * @var bool
     */
    public bool $trial_call;

    /**
     * @var array&lt;CallActionSchema&gt;
     */
    public array $executed_call_actions;

    /**
     * @var string
     */
    public string $summary;

    /**
     * @var string
     */
    public string $transcript;

    /**
     * @var mixed
     */
    public mixed $translation;

    /**
     * @var mixed
     */
    public mixed $extracted_data;

    /**
     * @var string|null
     */
    public ?string $message_id = null;

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
        $this->contact_id = $data['contactId'] ?? null;
        $this->agent_id = $data['agentId'] ?? '';
        $this->is_agent_deleted = $data['isAgentDeleted'] ?? false;
        $this->from_number = $data['fromNumber'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->duration = $data['duration'] ?? 0;
        $this->trial_call = $data['trialCall'] ?? false;
        // Handle array of CallActionSchema objects
        if (isset($data['executedCallActions']) && is_array($data['executedCallActions'])) {
            $this->executed_call_actions = array_map(function($item) {
                return is_array($item) ? new CallActionSchema($item) : $item;
            }, $data['executedCallActions']);
        } else {
            $this->executed_call_actions = $data['executedCallActions'] ?? [];
        }
        $this->summary = $data['summary'] ?? '';
        $this->transcript = $data['transcript'] ?? '';
        $this->translation = $data['translation'] ?? null;
        $this->extracted_data = $data['extractedData'] ?? null;
        $this->message_id = $data['messageId'] ?? null;
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
