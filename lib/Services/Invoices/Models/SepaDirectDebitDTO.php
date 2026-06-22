<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * SepaDirectDebitDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SepaDirectDebitDTO
{
    /**
     * @var string
     */
    public string $bank_code;

    /**
     * @var string
     */
    public string $last4;

    /**
     * @var string
     */
    public string $branch_code;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->bank_code = $data['bank_code'] ?? '';
        $this->last4 = $data['last4'] ?? '';
        $this->branch_code = $data['branch_code'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->bank_code !== null) {
            $result['bank_code'] = $this->bank_code;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        if ($this->branch_code !== null) {
            $result['branch_code'] = $this->branch_code;
        }
        return $result;
    }
}
