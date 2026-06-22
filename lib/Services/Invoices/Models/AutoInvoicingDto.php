<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * AutoInvoicingDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class AutoInvoicingDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var bool|null
     */
    public ?bool $direct_payments = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->direct_payments = $data['directPayments'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->direct_payments !== null) {
            $result['directPayments'] = $this->direct_payments;
        }
        return $result;
    }
}
