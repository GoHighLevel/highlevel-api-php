<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * IOgTagsSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class IOgTagsSchema
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $og_description = null;

    /**
     * @var mixed
     */
    public mixed $og_image;

    /**
     * @var string|null
     */
    public ?string $og_title = null;

    /**
     * @var string|null
     */
    public ?string $og_url = null;

    /**
     * @var string|null
     */
    public ?string $og_site_name = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

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
        $this->url = $data['url'] ?? null;
        $this->og_description = $data['ogDescription'] ?? null;
        $this->og_image = $data['ogImage'] ?? null;
        $this->og_title = $data['ogTitle'] ?? null;
        $this->og_url = $data['ogUrl'] ?? null;
        $this->og_site_name = $data['ogSiteName'] ?? null;
        $this->error = $data['error'] ?? null;
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
