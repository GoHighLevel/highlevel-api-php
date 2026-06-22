<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectLabelDto model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectLabelDto
{
    /**
     * @var string
     */
    public string $singular;

    /**
     * @var string
     */
    public string $plural;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->singular = $data['singular'] ?? '';
        $this->plural = $data['plural'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->singular !== null) {
            $result['singular'] = $this->singular;
        }
        if ($this->plural !== null) {
            $result['plural'] = $this->plural;
        }
        return $result;
    }
}
