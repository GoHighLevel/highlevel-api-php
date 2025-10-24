<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * PostMediaSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class PostMediaSchema
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $caption = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $thumbnail = null;

    /**
     * @var string|null
     */
    public ?string $default_thumb = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

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
        $this->url = $data['url'] ?? '';
        $this->caption = $data['caption'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->thumbnail = $data['thumbnail'] ?? null;
        $this->default_thumb = $data['defaultThumb'] ?? null;
        $this->id = $data['id'] ?? null;
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
