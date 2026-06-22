<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * OrderSource model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class OrderSource
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $sub_type = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->sub_type = $data['subType'] ?? null;
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->meta = $data['meta'] ?? null;
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
        if ($this->sub_type !== null) {
            $result['subType'] = $this->sub_type;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
