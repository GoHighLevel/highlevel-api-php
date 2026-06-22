<?php

namespace HighLevel\Services\Products\Models;

/**
 * CollectionSchema model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CollectionSchema
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
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var string
     */
    public string $image;

    /**
     * @var mixed
     */
    public $seo;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->slug = $data['slug'] ?? '';
        $this->image = $data['image'] ?? '';
        $this->seo = $data['seo'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
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
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        return $result;
    }
}
