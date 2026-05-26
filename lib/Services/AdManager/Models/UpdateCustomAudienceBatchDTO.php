<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * UpdateCustomAudienceBatchDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class UpdateCustomAudienceBatchDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $csv_path = null;

    /**
     * @var string
     */
    public string $operation_type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $smartlist_ids = null;

    /**
     * @var string|null
     */
    public ?string $dynamic_audience = null;

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
        $this->csv_path = $data['csvPath'] ?? null;
        $this->operation_type = $data['operationType'] ?? '';
        $this->smartlist_ids = $data['smartlistIds'] ?? null;
        $this->dynamic_audience = $data['dynamicAudience'] ?? null;
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
