<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LinkedInMediaDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LinkedInMediaDTO
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $src = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $frames = null;

    /**
     * @var float|null
     */
    public ?float $selected_poster = null;

    /**
     * @var string|null
     */
    public ?string $thumbnail_url = null;

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
    public ?string $destination_url = null;

    /**
     * @var float|null
     */
    public ?float $file_size_bytes = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->src = $data['src'] ?? null;
        $this->frames = $data['frames'] ?? null;
        $this->selected_poster = $data['selectedPoster'] ?? null;
        $this->thumbnail_url = $data['thumbnailUrl'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->destination_url = $data['destinationUrl'] ?? null;
        $this->file_size_bytes = $data['fileSizeBytes'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->src !== null) {
            $result['src'] = $this->src;
        }
        if ($this->frames !== null) {
            $result['frames'] = $this->frames;
        }
        if ($this->selected_poster !== null) {
            $result['selectedPoster'] = $this->selected_poster;
        }
        if ($this->thumbnail_url !== null) {
            $result['thumbnailUrl'] = $this->thumbnail_url;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->destination_url !== null) {
            $result['destinationUrl'] = $this->destination_url;
        }
        if ($this->file_size_bytes !== null) {
            $result['fileSizeBytes'] = $this->file_size_bytes;
        }
        return $result;
    }
}
