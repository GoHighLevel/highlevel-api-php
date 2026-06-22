<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * MigrateConnectionResponseDto model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class MigrateConnectionResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $identifier;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->identifier = $data['identifier'] ?? '';
        $this->message = $data['message'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->identifier !== null) {
            $result['identifier'] = $this->identifier;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
