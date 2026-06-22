<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * USBankAccountDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class USBankAccountDto
{
    /**
     * @var string
     */
    public string $bank_name;

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
        $this->bank_name = $data['bank_name'] ?? '';
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
        if ($this->bank_name !== null) {
            $result['bank_name'] = $this->bank_name;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        return $result;
    }
}
