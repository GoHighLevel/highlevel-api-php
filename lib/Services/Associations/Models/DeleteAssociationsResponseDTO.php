<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Associations\Models;

/**
 * DeleteAssociationsResponseDTO model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class DeleteAssociationsResponseDTO
{
    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $message;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->deleted = $data['deleted'] ?? false;
        $this->id = $data['id'] ?? '';
        $this->message = $data['message'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
