<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchSuccessfulResponseDto
{
    /**
     * @var array&lt;SearchOpportunitiesResponseSchema&gt;|null
     */
    public ?array $opportunities = null;

    /**
     * @var SearchMetaResponseSchema|null
     */
    public ?SearchMetaResponseSchema $meta = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $aggregations = null;

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
        // Handle array of SearchOpportunitiesResponseSchema objects
        if (isset($data['opportunities']) && is_array($data['opportunities'])) {
            $this->opportunities = array_map(function($item) {
                return is_array($item) ? new SearchOpportunitiesResponseSchema($item) : $item;
            }, $data['opportunities']);
        } else {
            $this->opportunities = $data['opportunities'] ?? null;
        }
        // Handle single SearchMetaResponseSchema object
        if (isset($data['meta']) && is_array($data['meta'])) {
            $this->meta = new SearchMetaResponseSchema($data['meta']);
        } else {
            $this->meta = $data['meta'] ?? null;
        }
        $this->aggregations = $data['aggregations'] ?? null;
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
