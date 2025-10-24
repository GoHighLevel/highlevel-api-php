<?php

namespace HighLevel\Services\Locations\Models;

/**
 * UpdateCustomFieldsDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class UpdateCustomFieldsDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $accepted_format = null;

    /**
     * @var bool|null
     */
    public ?bool $is_multiple_file = null;

    /**
     * @var float|null
     */
    public ?float $max_number_of_files = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $text_box_list_options = null;

    /**
     * @var float|null
     */
    public ?float $position = null;

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
        $this->name = $data['name'] ?? '';
        $this->placeholder = $data['placeholder'] ?? null;
        $this->accepted_format = $data['acceptedFormat'] ?? null;
        $this->is_multiple_file = $data['isMultipleFile'] ?? null;
        $this->max_number_of_files = $data['maxNumberOfFiles'] ?? null;
        $this->text_box_list_options = $data['textBoxListOptions'] ?? null;
        $this->position = $data['position'] ?? null;
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
