<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * StripePaymentMethodDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class StripePaymentMethodDto
{
    /**
     * @var bool
     */
    public bool $enable_bank_debit_only;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable_bank_debit_only = $data['enableBankDebitOnly'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable_bank_debit_only !== null) {
            $result['enableBankDebitOnly'] = $this->enable_bank_debit_only;
        }
        return $result;
    }
}
