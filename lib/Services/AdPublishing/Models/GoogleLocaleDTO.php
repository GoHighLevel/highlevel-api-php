<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleLocaleDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleLocaleDTO
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $key = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->key = $data['key'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->resource_name = $data['resourceName'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        return $result;
    }
}
