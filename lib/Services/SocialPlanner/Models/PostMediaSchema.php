<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PostMediaSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
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
    public ?string $original_url = null;

    /**
     * @var string|null
     */
    public ?string $watermarked_url = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $thumbnail = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $optimized_url = null;

    /**
     * @var string|null
     */
    public ?string $optimized_type = null;

    /**
     * @var bool|null
     */
    public ?bool $is_modified = null;

    /**
     * @var string|null
     */
    public ?string $alt_text = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->caption = $data['caption'] ?? null;
        $this->original_url = $data['originalUrl'] ?? null;
        $this->watermarked_url = $data['watermarkedUrl'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->thumbnail = $data['thumbnail'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->optimized_url = $data['optimizedUrl'] ?? null;
        $this->optimized_type = $data['optimizedType'] ?? null;
        $this->is_modified = $data['isModified'] ?? null;
        $this->alt_text = $data['altText'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->caption !== null) {
            $result['caption'] = $this->caption;
        }
        if ($this->original_url !== null) {
            $result['originalUrl'] = $this->original_url;
        }
        if ($this->watermarked_url !== null) {
            $result['watermarkedUrl'] = $this->watermarked_url;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->optimized_url !== null) {
            $result['optimizedUrl'] = $this->optimized_url;
        }
        if ($this->optimized_type !== null) {
            $result['optimizedType'] = $this->optimized_type;
        }
        if ($this->is_modified !== null) {
            $result['isModified'] = $this->is_modified;
        }
        if ($this->alt_text !== null) {
            $result['altText'] = $this->alt_text;
        }
        return $result;
    }
}
