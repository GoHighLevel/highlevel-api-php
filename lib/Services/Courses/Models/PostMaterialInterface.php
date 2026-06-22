<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Courses\Models;

/**
 * PostMaterialInterface model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class PostMaterialInterface
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var type
     */
    public type $type;

    /**
     * @var string
     */
    public string $url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        // Handle single Type object
        if (isset($data['type']) && is_array($data['type'])) {
            $this->type = new Type($data['type']);
        } else {
            $this->type = $data['type'] ?? null;
        }
        $this->url = $data['url'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->type !== null) {
            $result['type'] = is_object($this->type) && method_exists($this->type, 'toArray') 
                ? $this->type->toArray() 
                : $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }
}
