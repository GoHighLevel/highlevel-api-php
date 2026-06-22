<?php

namespace HighLevel\Services\Courses\Models;

/**
 * CategoryInterface model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class CategoryInterface
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
     * @var array&lt;SubCategoryInterface&gt;|null
     */
    public ?array $sub_categories = null;

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
        // Handle array of SubCategoryInterface objects
        if (isset($data['subCategories']) && is_array($data['subCategories'])) {
            $this->sub_categories = array_map(function($item) {
                return is_array($item) ? new SubCategoryInterface($item) : $item;
            }, $data['subCategories']);
        } else {
            $this->sub_categories = $data['subCategories'] ?? null;
        }
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
        if ($this->visibility !== null) {
            $result['visibility'] = is_object($this->visibility) && method_exists($this->visibility, 'toArray') 
                ? $this->visibility->toArray() 
                : $this->visibility;
        }
        if ($this->thumbnail_url !== null) {
            $result['thumbnailUrl'] = $this->thumbnail_url;
        }
        if ($this->posts !== null) {
            $result['posts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->posts);
        }
        if ($this->sub_categories !== null) {
            $result['subCategories'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->sub_categories);
        }
        return $result;
    }
}
