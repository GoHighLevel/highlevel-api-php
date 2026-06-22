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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->categories !== null) {
            $result['categories'] = $this->categories;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->image_alt_text !== null) {
            $result['imageAltText'] = $this->image_alt_text;
        }
        if ($this->url_slug !== null) {
            $result['urlSlug'] = $this->url_slug;
        }
        if ($this->canonical_link !== null) {
            $result['canonicalLink'] = $this->canonical_link;
        }
        if ($this->author !== null) {
            $result['author'] = $this->author;
        }
        if ($this->published_at !== null) {
            $result['publishedAt'] = $this->published_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
