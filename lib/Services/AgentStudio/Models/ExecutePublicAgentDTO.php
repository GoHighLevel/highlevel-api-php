<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * ExecutePublicAgentDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class ExecutePublicAgentDTO
{
    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $execution_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $input_variables = null;

    /**
     * @var string|null
     */
    public ?string $version_id = null;

    /**
     * @var array&lt;PublicAttachmentSchema&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

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
        $this->message = $data['message'] ?? '';
        $this->execution_id = $data['executionId'] ?? null;
        $this->input_variables = $data['inputVariables'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
        // Handle array of PublicAttachmentSchema objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new PublicAttachmentSchema($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
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
