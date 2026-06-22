<?php

namespace HighLevel\Services\Products\Models;

/**
 * ProductMediaDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ProductMediaDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var bool|null
     */
    public ?bool $is_featured = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $price_ids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->url = $data['url'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->is_featured = $data['isFeatured'] ?? null;
        $this->price_ids = $data['priceIds'] ?? null;
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
            $result['id'] = $this->id;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->is_featured !== null) {
            $result['isFeatured'] = $this->is_featured;
        }
        if ($this->price_ids !== null) {
            $result['priceIds'] = $this->price_ids;
        }
        return $result;
    }
}
