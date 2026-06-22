<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CardDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CardDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $last4;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->last4 = $data['last4'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        return $result;
    }
}
