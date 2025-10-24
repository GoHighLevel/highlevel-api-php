<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * CreateDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class CreateDto
{
    /**
     * @var string
     */
    public string $pipeline_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var float|null
     */
    public ?float $monetary_value = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $custom_fields = null;

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
        $this->pipeline_id = $data['pipelineId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->custom_fields = $data['customFields'] ?? null;
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
