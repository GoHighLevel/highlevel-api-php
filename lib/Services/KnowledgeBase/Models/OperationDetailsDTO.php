<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * OperationDetailsDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class OperationDetailsDTO
{
    /**
     * @var float
     */
    public float $discovered_urls_count;

    /**
     * @var float
     */
    public float $trained_urls_count;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $mode;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var float
     */
    public float $_v;

    /**
     * @var string|null
     */
    public ?string $robots_file_data = null;

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
        $this->discovered_urls_count = $data['discoveredUrlsCount'] ?? 0;
        $this->trained_urls_count = $data['trainedUrlsCount'] ?? 0;
        $this->id = $data['_id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->url = $data['url'] ?? '';
        $this->mode = $data['mode'] ?? '';
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->_v = $data['__v'] ?? 0;
        $this->robots_file_data = $data['robotsFileData'] ?? null;
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
