<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * UpdatePublicAgentVersionDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class UpdatePublicAgentVersionDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $version_name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $nodes = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $edges = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $global_variables = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $input_variables = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $runtime_variables = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $global_config = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $user_name = null;

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
        $this->version_name = $data['versionName'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->nodes = $data['nodes'] ?? null;
        $this->edges = $data['edges'] ?? null;
        $this->global_variables = $data['globalVariables'] ?? null;
        $this->input_variables = $data['inputVariables'] ?? null;
        $this->runtime_variables = $data['runtimeVariables'] ?? null;
        $this->global_config = $data['globalConfig'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->user_name = $data['userName'] ?? null;
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
