<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * SendInvoicesResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SendInvoicesResponseDto
{
    /**
     * @var DefaultInvoiceResponseDto
     */
    public DefaultInvoiceResponseDto $invoice;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $sms_data;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $email_data;

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
        $this->sms_data = $data['smsData'] ?? null;
        $this->email_data = $data['emailData'] ?? null;
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
        if ($this->sms_data !== null) {
            $result['smsData'] = $this->sms_data;
        }
        if ($this->email_data !== null) {
            $result['emailData'] = $this->email_data;
        }
        return $result;
    }
}
