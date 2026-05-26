<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LinkedInMediaDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class LinkedInMediaDTO
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $src = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $frames = null;

    /**
     * @var float|null
     */
    public ?float $selected_poster = null;

    /**
     * @var string|null
     */
    public ?string $thumbnail_url = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $destination_url = null;

    /**
     * @var float|null
     */
    public ?float $file_size_bytes = null;

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
        $this->type = $data['type'] ?? null;
        $this->src = $data['src'] ?? null;
        $this->frames = $data['frames'] ?? null;
        $this->selected_poster = $data['selectedPoster'] ?? null;
        $this->thumbnail_url = $data['thumbnailUrl'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->destination_url = $data['destinationUrl'] ?? null;
        $this->file_size_bytes = $data['fileSizeBytes'] ?? null;
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
