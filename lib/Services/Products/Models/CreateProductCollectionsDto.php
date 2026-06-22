<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * CreateProductCollectionsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CreateProductCollectionsDto
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
     * @var string|null
     */
    public ?string $collection_id = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var string|null
     */
    public ?string $image = null;

    /**
     * @var mixed
     */
    public $seo;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->collection_id = $data['collectionId'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->slug = $data['slug'] ?? '';
        $this->image = $data['image'] ?? null;
        $this->seo = $data['seo'] ?? null;
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
        if ($this->collection_id !== null) {
            $result['collectionId'] = $this->collection_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->seo !== null) {
            $result['seo'] = $this->seo;
        }
        return $result;
    }
}
