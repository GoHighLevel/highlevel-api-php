<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * GenerateInvoiceNumberResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class GenerateInvoiceNumberResponseDto
{
    /**
     * @var float|null
     */
    public ?float $invoice_number = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->invoice_number = $data['invoiceNumber'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->invoice_number !== null) {
            $result['invoiceNumber'] = $this->invoice_number;
        }
        return $result;
    }
}
