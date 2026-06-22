<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductCollectionsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductCollectionsDto
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
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $slug = null;

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
        $this->name = $data['name'] ?? null;
        $this->slug = $data['slug'] ?? null;
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
