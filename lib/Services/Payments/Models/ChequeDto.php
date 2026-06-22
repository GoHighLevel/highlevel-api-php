<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * ChequeDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ChequeDto
{
    /**
     * @var string
     */
    public string $number;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->number = $data['number'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->number !== null) {
            $result['number'] = $this->number;
        }
        return $result;
    }
}
