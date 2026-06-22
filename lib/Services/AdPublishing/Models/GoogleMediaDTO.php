<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleMediaDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleMediaDTO
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
     * @var bool|null
     */
    public ?bool $is_logo = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $image_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->src = $data['src'] ?? null;
        $this->is_logo = $data['isLogo'] ?? null;
        $this->error = $data['error'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->image_type = $data['imageType'] ?? null;
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
        if ($this->is_logo !== null) {
            $result['isLogo'] = $this->is_logo;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->image_type !== null) {
            $result['imageType'] = $this->image_type;
        }
        return $result;
    }
}
