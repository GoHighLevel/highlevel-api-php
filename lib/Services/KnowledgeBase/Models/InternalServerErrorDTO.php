<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * InternalServerErrorDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class InternalServerErrorDTO
{
    /**
     * @var float|null
     */
    public ?float $status_code = null;

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
        $this->status_code = $data['statusCode'] ?? null;
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
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
