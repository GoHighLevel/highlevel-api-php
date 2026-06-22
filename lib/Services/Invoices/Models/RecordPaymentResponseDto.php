<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * RecordPaymentResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class RecordPaymentResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var DefaultInvoiceResponseDto
     */
    public DefaultInvoiceResponseDto $invoice;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        // Handle single DefaultInvoiceResponseDto object
        if (isset($data['invoice']) && is_array($data['invoice'])) {
            $this->invoice = new DefaultInvoiceResponseDto($data['invoice']);
        } else {
            $this->invoice = $data['invoice'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->invoice !== null) {
            $result['invoice'] = is_object($this->invoice) && method_exists($this->invoice, 'toArray') 
                ? $this->invoice->toArray() 
                : $this->invoice;
        }
        return $result;
    }
}
