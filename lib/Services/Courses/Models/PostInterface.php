<?php

namespace HighLevel\Services\Courses\Models;

/**
 * PostInterface model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class PostInterface
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
     * @var contentType
     */
    public contentType $content_type;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string|null
     */
    public ?string $bucket_video_url = null;

    /**
     * @var array&lt;PostMaterialInterface&gt;|null
     */
    public ?array $post_materials = null;

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
        // Handle single ContentType object
        if (isset($data['contentType']) && is_array($data['contentType'])) {
            $this->content_type = new ContentType($data['contentType']);
        } else {
            $this->content_type = $data['contentType'] ?? null;
        }
        $this->description = $data['description'] ?? '';
        $this->bucket_video_url = $data['bucketVideoUrl'] ?? null;
        // Handle array of PostMaterialInterface objects
        if (isset($data['postMaterials']) && is_array($data['postMaterials'])) {
            $this->post_materials = array_map(function($item) {
                return is_array($item) ? new PostMaterialInterface($item) : $item;
            }, $data['postMaterials']);
        } else {
            $this->post_materials = $data['postMaterials'] ?? null;
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
