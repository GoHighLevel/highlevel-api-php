<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
        if ($this->content_type !== null) {
            $result['contentType'] = is_object($this->content_type) && method_exists($this->content_type, 'toArray') 
                ? $this->content_type->toArray() 
                : $this->content_type;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->bucket_video_url !== null) {
            $result['bucketVideoUrl'] = $this->bucket_video_url;
        }
        if ($this->post_materials !== null) {
            $result['postMaterials'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->post_materials);
        }
        return $result;
    }
}
