<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * ObjectRecordDeleteResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class ObjectRecordDeleteResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var bool|null
     */
    public ?bool $success = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->success = $data['success'] ?? null;
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
