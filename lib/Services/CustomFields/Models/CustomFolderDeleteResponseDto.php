<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\CustomFields\Models;

/**
 * CustomFolderDeleteResponseDto model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class CustomFolderDeleteResponseDto
{
    /**
     * @var bool
     */
    public bool $succeded;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $key;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeded = $data['succeded'] ?? false;
        $this->id = $data['id'] ?? '';
        $this->key = $data['key'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->succeded !== null) {
            $result['succeded'] = $this->succeded;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        return $result;
    }
}
