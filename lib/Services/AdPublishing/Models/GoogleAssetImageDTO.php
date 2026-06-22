<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAssetImageDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleAssetImageDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->resource_name = $data['resourceName'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->error = $data['error'] ?? null;
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
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        return $result;
    }
}
