<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * OpportunitySearchBodyDTO model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class OpportunitySearchBodyDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $query;

    /**
     * @var float
     */
    public float $limit;

    /**
     * @var float
     */
    public float $page;

    /**
     * @var array&lt;string&gt;
     */
    public array $search_after;

    /**
     * @var AdditionalDetailsDTO
     */
    public AdditionalDetailsDTO $additional_details;

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
        $this->query = $data['query'] ?? '';
        $this->limit = $data['limit'] ?? 0;
        $this->page = $data['page'] ?? 0;
        $this->search_after = $data['searchAfter'] ?? [];
        // Handle single AdditionalDetailsDTO object
        if (isset($data['additionalDetails']) && is_array($data['additionalDetails'])) {
            $this->additional_details = new AdditionalDetailsDTO($data['additionalDetails']);
        } else {
            $this->additional_details = $data['additionalDetails'] ?? null;
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
