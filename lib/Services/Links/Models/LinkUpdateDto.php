<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Links\Models;

/**
 * LinkUpdateDto model
 * 
 * @package HighLevel\Services\Links\Models
 */
class LinkUpdateDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $redirect_to;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->redirect_to = $data['redirectTo'] ?? '';
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
        if ($this->redirect_to !== null) {
            $result['redirectTo'] = $this->redirect_to;
        }
        return $result;
    }
}
