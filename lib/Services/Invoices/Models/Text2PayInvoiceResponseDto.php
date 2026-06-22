<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * Text2PayInvoiceResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class Text2PayInvoiceResponseDto
{
    /**
     * @var DefaultInvoiceResponseDto
     */
    public DefaultInvoiceResponseDto $invoice;

    /**
     * @var string
     */
    public string $invoice_url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single DefaultInvoiceResponseDto object
        if (isset($data['invoice']) && is_array($data['invoice'])) {
            $this->invoice = new DefaultInvoiceResponseDto($data['invoice']);
        } else {
            $this->invoice = $data['invoice'] ?? null;
        }
        $this->invoice_url = $data['invoiceUrl'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->invoice !== null) {
            $result['invoice'] = is_object($this->invoice) && method_exists($this->invoice, 'toArray') 
                ? $this->invoice->toArray() 
                : $this->invoice;
        }
        if ($this->invoice_url !== null) {
            $result['invoiceUrl'] = $this->invoice_url;
        }
        return $result;
    }
}
