<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Forms\Models;

/**
 * PageDetailsSchema model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class PageDetailsSchema
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? null;
        $this->title = $data['title'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }
}
