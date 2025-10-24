<?php

namespace HighLevel\Services\Courses\Models;

/**
 * SubCategoryInterface model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class SubCategoryInterface
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var visibility
     */
    public visibility $visibility;

    /**
     * @var string|null
     */
    public ?string $thumbnail_url = null;

    /**
     * @var array&lt;PostInterface&gt;|null
     */
    public ?array $posts = null;

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
        $this->title = $data['title'] ?? '';
        // Handle single Visibility object
        if (isset($data['visibility']) && is_array($data['visibility'])) {
            $this->visibility = new Visibility($data['visibility']);
        } else {
            $this->visibility = $data['visibility'] ?? null;
        }
        $this->thumbnail_url = $data['thumbnailUrl'] ?? null;
        // Handle array of PostInterface objects
        if (isset($data['posts']) && is_array($data['posts'])) {
            $this->posts = array_map(function($item) {
                return is_array($item) ? new PostInterface($item) : $item;
            }, $data['posts']);
        } else {
            $this->posts = $data['posts'] ?? null;
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
