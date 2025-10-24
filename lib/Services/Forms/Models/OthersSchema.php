<?php

namespace HighLevel\Services\Forms\Models;

/**
 * othersSchema model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class OthersSchema
{
    /**
     * @var string|null
     */
    public ?string $_submissions_other_field_ = null;

    /**
     * @var string|null
     */
    public ?string $_custom_field_id_ = null;

    /**
     * @var EventDataSchema|null
     */
    public ?EventDataSchema $event_data = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $fields_ori_sequance = null;

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
        $this->_submissions_other_field_ = $data['__submissions_other_field__'] ?? null;
        $this->_custom_field_id_ = $data['__custom_field_id__'] ?? null;
        // Handle single EventDataSchema object
        if (isset($data['eventData']) && is_array($data['eventData'])) {
            $this->event_data = new EventDataSchema($data['eventData']);
        } else {
            $this->event_data = $data['eventData'] ?? null;
        }
        $this->fields_ori_sequance = $data['fieldsOriSequance'] ?? null;
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
