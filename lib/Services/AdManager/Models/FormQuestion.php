<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * FormQuestion model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class FormQuestion
{
    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;FormQuestionOption&gt;|null
     */
    public ?array $options = null;

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
        $this->label = $data['label'] ?? null;
        $this->key = $data['key'] ?? '';
        $this->type = $data['type'] ?? '';
        // Handle array of FormQuestionOption objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new FormQuestionOption($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? null;
        }
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
