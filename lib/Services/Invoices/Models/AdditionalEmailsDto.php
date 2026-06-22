<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * AdditionalEmailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class AdditionalEmailsDto
{
    /**
     * @var string
     */
    public string $email;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->email = $data['email'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        return $result;
    }
}
