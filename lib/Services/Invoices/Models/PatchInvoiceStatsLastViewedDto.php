<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * PatchInvoiceStatsLastViewedDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class PatchInvoiceStatsLastViewedDto
{
    /**
     * @var string
     */
    public string $invoice_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->invoice_id = $data['invoiceId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->invoice_id !== null) {
            $result['invoiceId'] = $this->invoice_id;
        }
        return $result;
    }
}
