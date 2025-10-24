<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchOpportunitiesResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchOpportunitiesResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var float|null
     */
    public ?float $monetary_value = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_id = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $last_status_change_at = null;

    /**
     * @var string|null
     */
    public ?string $last_stage_change_at = null;

    /**
     * @var string|null
     */
    public ?string $last_action_date = null;

    /**
     * @var string|null
     */
    public ?string $index_version = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var SearchOpportunitiesContactResponseSchema|null
     */
    public ?SearchOpportunitiesContactResponseSchema $contact = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $notes = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tasks = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calendar_events = null;

    /**
     * @var array&lt;CustomFieldResponseSchema&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $followers = null;

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
        $this->name = $data['name'] ?? null;
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->pipeline_id = $data['pipelineId'] ?? null;
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->last_status_change_at = $data['lastStatusChangeAt'] ?? null;
        $this->last_stage_change_at = $data['lastStageChangeAt'] ?? null;
        $this->last_action_date = $data['lastActionDate'] ?? null;
        $this->index_version = $data['indexVersion'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        // Handle single SearchOpportunitiesContactResponseSchema object
        if (isset($data['contact']) && is_array($data['contact'])) {
            $this->contact = new SearchOpportunitiesContactResponseSchema($data['contact']);
        } else {
            $this->contact = $data['contact'] ?? null;
        }
        $this->notes = $data['notes'] ?? null;
        $this->tasks = $data['tasks'] ?? null;
        $this->calendar_events = $data['calendarEvents'] ?? null;
        // Handle array of CustomFieldResponseSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldResponseSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->followers = $data['followers'] ?? null;
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
