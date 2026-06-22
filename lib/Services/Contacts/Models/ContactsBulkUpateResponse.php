<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * ContactsBulkUpateResponse model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class ContactsBulkUpateResponse
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var array&lt;string&gt;
     */
    public array $ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->ids = $data['ids'] ?? [];
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
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        return $result;
    }
}
