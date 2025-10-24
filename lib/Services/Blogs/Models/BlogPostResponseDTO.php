<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * BlogPostResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class BlogPostResponseDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $categories;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var bool
     */
    public bool $archived;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $image_alt_text;

    /**
     * @var string
     */
    public string $url_slug;

    /**
     * @var string|null
     */
    public ?string $canonical_link = null;

    /**
     * @var string|null
     */
    public ?string $author = null;

    /**
     * @var string
     */
    public string $published_at;

    /**
     * @var string
     */
    public string $updated_at;

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
        $this->categories = $data['categories'] ?? [];
        $this->tags = $data['tags'] ?? null;
        $this->archived = $data['archived'] ?? false;
        $this->id = $data['_id'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->image_alt_text = $data['imageAltText'] ?? '';
        $this->url_slug = $data['urlSlug'] ?? '';
        $this->canonical_link = $data['canonicalLink'] ?? null;
        $this->author = $data['author'] ?? null;
        $this->published_at = $data['publishedAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
