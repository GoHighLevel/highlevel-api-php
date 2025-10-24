<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * CreateBlogPostParams model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class CreateBlogPostParams
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $blog_id;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $raw_h_t_m_l;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $image_alt_text;

    /**
     * @var array&lt;string&gt;
     */
    public array $categories;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string
     */
    public string $author;

    /**
     * @var string
     */
    public string $url_slug;

    /**
     * @var string|null
     */
    public ?string $canonical_link = null;

    /**
     * @var string
     */
    public string $published_at;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->blog_id = $data['blogId'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->raw_h_t_m_l = $data['rawHTML'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->image_alt_text = $data['imageAltText'] ?? '';
        $this->categories = $data['categories'] ?? [];
        $this->tags = $data['tags'] ?? null;
        $this->author = $data['author'] ?? '';
        $this->url_slug = $data['urlSlug'] ?? '';
        $this->canonical_link = $data['canonicalLink'] ?? null;
        $this->published_at = $data['publishedAt'] ?? '';
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
