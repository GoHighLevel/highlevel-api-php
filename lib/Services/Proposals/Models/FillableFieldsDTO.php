<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * FillableFieldsDTO model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class FillableFieldsDTO
{
    /**
     * @var string
     */
    public string $field_id;

    /**
     * @var bool
     */
    public bool $is_required;

    /**
     * @var bool
     */
    public bool $has_completed;

    /**
     * @var string
     */
    public string $recipient;

    /**
     * @var EntityReference
     */
    public EntityReference $entity_type;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var ELEMENTS_LOOKUP
     */
    public ELEMENTS_LOOKUP $type;

    /**
     * @var string
     */
    public string $value;

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
        $this->field_id = $data['fieldId'] ?? '';
        $this->is_required = $data['isRequired'] ?? false;
        $this->has_completed = $data['hasCompleted'] ?? false;
        $this->recipient = $data['recipient'] ?? '';
        // Handle single EntityReference object
        if (isset($data['entityType']) && is_array($data['entityType'])) {
            $this->entity_type = new EntityReference($data['entityType']);
        } else {
            $this->entity_type = $data['entityType'] ?? null;
        }
        $this->id = $data['id'] ?? '';
        // Handle single ELEMENTSLOOKUP object
        if (isset($data['type']) && is_array($data['type'])) {
            $this->type = new ELEMENTSLOOKUP($data['type']);
        } else {
            $this->type = $data['type'] ?? null;
        }
        $this->value = $data['value'] ?? '';
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
