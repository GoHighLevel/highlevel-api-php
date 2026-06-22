<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CreateWhitelabelIntegrationResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateWhitelabelIntegrationResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $route;

    /**
     * @var string
     */
    public string $provider;

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
    public string $created_at;

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
        $this->id = $data['_id'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->route = $data['route'] ?? '';
        $this->provider = $data['provider'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->route !== null) {
            $result['route'] = $this->route;
        }
        if ($this->provider !== null) {
            $result['provider'] = $this->provider;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
