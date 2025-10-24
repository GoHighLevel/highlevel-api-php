<?php

namespace HighLevel\Services\Associations\Models;

/**
 * createAssociationReqDto model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class CreateAssociationReqDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $first_object_label;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $first_object_key;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $second_object_label;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $second_object_key;

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
        $this->key = $data['key'] ?? '';
        $this->first_object_label = $data['firstObjectLabel'] ?? null;
        $this->first_object_key = $data['firstObjectKey'] ?? null;
        $this->second_object_label = $data['secondObjectLabel'] ?? null;
        $this->second_object_key = $data['secondObjectKey'] ?? null;
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
