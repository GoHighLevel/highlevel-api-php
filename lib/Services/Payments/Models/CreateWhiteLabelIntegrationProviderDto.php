<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CreateWhiteLabelIntegrationProviderDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateWhiteLabelIntegrationProviderDto
{
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
    public string $unique_name;

    /**
     * @var string
     */
    public string $title;

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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->unique_name = $data['uniqueName'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->provider = $data['provider'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->unique_name !== null) {
            $result['uniqueName'] = $this->unique_name;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
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
        return $result;
    }
}
