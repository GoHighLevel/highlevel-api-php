<?php

namespace HighLevel\Services\Locations\Models;

/**
 * CustomFieldSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomFieldSchema
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
     * @var string|null
     */
    public ?string $field_key = null;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var string|null
     */
    public ?string $data_type = null;

    /**
     * @var float|null
     */
    public ?float $position = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $picklist_options = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $picklist_image_options = null;

    /**
     * @var bool|null
     */
    public ?bool $is_allowed_custom_option = null;

    /**
     * @var bool|null
     */
    public ?bool $is_multi_file_allowed = null;

    /**
     * @var float|null
     */
    public ?float $max_file_limit = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $model = null;

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
        $this->field_key = $data['fieldKey'] ?? null;
        $this->placeholder = $data['placeholder'] ?? null;
        $this->data_type = $data['dataType'] ?? null;
        $this->position = $data['position'] ?? null;
        $this->picklist_options = $data['picklistOptions'] ?? null;
        $this->picklist_image_options = $data['picklistImageOptions'] ?? null;
        $this->is_allowed_custom_option = $data['isAllowedCustomOption'] ?? null;
        $this->is_multi_file_allowed = $data['isMultiFileAllowed'] ?? null;
        $this->max_file_limit = $data['maxFileLimit'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->model = $data['model'] ?? null;
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
