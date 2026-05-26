<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * CreatePublicAgentDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class CreatePublicAgentDTO
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
    public ?string $agency_id = null;

    /**
     * @var string|null
     */
    public ?string $author_id = null;

    /**
     * @var string|null
     */
    public ?string $author_name = null;

    /**
     * @var string|null
     */
    public ?string $author_email = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $version;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $nodes = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $edges = null;

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
        $this->agency_id = $data['agencyId'] ?? null;
        $this->author_id = $data['authorId'] ?? null;
        $this->author_name = $data['authorName'] ?? null;
        $this->author_email = $data['authorEmail'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->version = $data['version'] ?? null;
        $this->nodes = $data['nodes'] ?? null;
        $this->edges = $data['edges'] ?? null;
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
