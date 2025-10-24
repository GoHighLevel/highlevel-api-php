<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * CSVImportSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class CSVImportSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $file_name = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * @var string|null
     */
    public ?string $file = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var string|null
     */
    public ?string $approver = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

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
        $this->id = $data['_id'] ?? '';
        $this->location_id = $data['locationId'] ?? null;
        $this->file_name = $data['fileName'] ?? null;
        $this->account_ids = $data['accountIds'] ?? null;
        $this->file = $data['file'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
        $this->origin_id = $data['originId'] ?? null;
        $this->approver = $data['approver'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
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
