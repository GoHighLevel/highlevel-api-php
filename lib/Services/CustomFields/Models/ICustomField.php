<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * ICustomField model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class ICustomField
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var bool
     */
    public bool $show_in_forms;

    /**
     * @var array&lt;OptionDTO&gt;|null
     */
    public ?array $options = null;

    /**
     * @var string|null
     */
    public ?string $accepted_formats = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $object_key;

    /**
     * @var string
     */
    public string $data_type;

    /**
     * @var string
     */
    public string $parent_id;

    /**
     * @var string
     */
    public string $field_key;

    /**
     * @var bool|null
     */
    public ?bool $allow_custom_option = null;

    /**
     * @var float|null
     */
    public ?float $max_file_limit = null;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->placeholder = $data['placeholder'] ?? null;
        $this->show_in_forms = $data['showInForms'] ?? false;
        // Handle array of OptionDTO objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new OptionDTO($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? null;
        }
        $this->accepted_formats = $data['acceptedFormats'] ?? null;
        $this->id = $data['id'] ?? '';
        $this->object_key = $data['objectKey'] ?? '';
        $this->data_type = $data['dataType'] ?? '';
        $this->parent_id = $data['parentId'] ?? '';
        $this->field_key = $data['fieldKey'] ?? '';
        $this->allow_custom_option = $data['allowCustomOption'] ?? null;
        $this->max_file_limit = $data['maxFileLimit'] ?? null;
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
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
