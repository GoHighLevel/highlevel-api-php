<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * UpsertOpportunityDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class UpsertOpportunityDto
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $pipeline_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $followers;

    /**
     * @var bool
     */
    public bool $is_remove_all_followers;

    /**
     * @var string
     */
    public string $followers_action_type;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $monetary_value = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $lost_reason_id = null;

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
        $this->id = $data['id'] ?? null;
        $this->pipeline_id = $data['pipelineId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->followers = $data['followers'] ?? [];
        $this->is_remove_all_followers = $data['isRemoveAllFollowers'] ?? false;
        $this->followers_action_type = $data['followersActionType'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->lost_reason_id = $data['lostReasonId'] ?? null;
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
