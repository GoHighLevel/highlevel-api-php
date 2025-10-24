<?php

namespace HighLevel\Services\Snapshots\Models;

/**
 * CreateSnapshotShareLinkRequestDTO model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class CreateSnapshotShareLinkRequestDTO
{
    /**
     * @var string
     */
    public string $snapshot_id;

    /**
     * @var string
     */
    public string $share_type;

    /**
     * @var string|null
     */
    public ?string $relationship_number = null;

    /**
     * @var string|null
     */
    public ?string $share_location_id = null;

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
        $this->snapshot_id = $data['snapshot_id'] ?? '';
        $this->share_type = $data['share_type'] ?? '';
        $this->relationship_number = $data['relationship_number'] ?? null;
        $this->share_location_id = $data['share_location_id'] ?? null;
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
