<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * MediaDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class MediaDTO
{
    /**
     * @var string
     */
    public string $src;

    /**
     * @var string|null
     */
    public ?string $thumbnail_url = null;

    /**
     * @var float|null
     */
    public ?float $selected_poster = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $link = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->src = $data['src'] ?? '';
        $this->thumbnail_url = $data['thumbnailUrl'] ?? null;
        $this->selected_poster = $data['selectedPoster'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->link = $data['link'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->src !== null) {
            $result['src'] = $this->src;
        }
        if ($this->thumbnail_url !== null) {
            $result['thumbnailUrl'] = $this->thumbnail_url;
        }
        if ($this->selected_poster !== null) {
            $result['selectedPoster'] = $this->selected_poster;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        return $result;
    }
}
