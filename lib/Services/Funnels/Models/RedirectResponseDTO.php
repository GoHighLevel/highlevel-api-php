<?php

namespace HighLevel\Services\Funnels\Models;

/**
 * RedirectResponseDTO model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class RedirectResponseDTO
{
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
    public string $domain;

    /**
     * @var string
     */
    public string $path;

    /**
     * @var string
     */
    public string $path_lowercase;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $target;

    /**
     * @var string
     */
    public string $action;

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
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->domain = $data['domain'] ?? '';
        $this->path = $data['path'] ?? '';
        $this->path_lowercase = $data['pathLowercase'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->target = $data['target'] ?? '';
        $this->action = $data['action'] ?? '';
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
