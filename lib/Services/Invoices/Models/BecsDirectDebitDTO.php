<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * BecsDirectDebitDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class BecsDirectDebitDTO
{
    /**
     * @var string
     */
    public string $bsb_number;

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
        $this->bsb_number = $data['bsb_number'] ?? '';
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
        if ($this->bsb_number !== null) {
            $result['bsb_number'] = $this->bsb_number;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        return $result;
    }
}
