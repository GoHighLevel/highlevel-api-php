<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CrawlingStatusResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CrawlingStatusResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var mixed
     */
    public $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->data = $data['data'] ?? null;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
