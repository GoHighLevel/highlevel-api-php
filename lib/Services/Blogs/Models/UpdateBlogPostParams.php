<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * UpdateBlogPostParams model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class UpdateBlogPostParams
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
     * @var float
     */
    public float $word_count;

    /**
     * @var string|null
     */
    public ?string $canonical_link = null;

    /**
     * @var string
     */
    public string $published_at;

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
        $this->word_count = $data['wordCount'] ?? 0;
        $this->canonical_link = $data['canonicalLink'] ?? null;
        $this->published_at = $data['publishedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->blog_id !== null) {
            $result['blogId'] = $this->blog_id;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->raw_h_t_m_l !== null) {
            $result['rawHTML'] = $this->raw_h_t_m_l;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->image_alt_text !== null) {
            $result['imageAltText'] = $this->image_alt_text;
        }
        if ($this->categories !== null) {
            $result['categories'] = $this->categories;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->author !== null) {
            $result['author'] = $this->author;
        }
        if ($this->url_slug !== null) {
            $result['urlSlug'] = $this->url_slug;
        }
        if ($this->word_count !== null) {
            $result['wordCount'] = $this->word_count;
        }
        if ($this->canonical_link !== null) {
            $result['canonicalLink'] = $this->canonical_link;
        }
        if ($this->published_at !== null) {
            $result['publishedAt'] = $this->published_at;
        }
        return $result;
    }
}
