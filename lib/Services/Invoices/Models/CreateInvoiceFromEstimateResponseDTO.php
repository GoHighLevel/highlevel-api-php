<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateInvoiceFromEstimateResponseDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateInvoiceFromEstimateResponseDTO
{
    /**
     * @var mixed
     */
    public $estimate;

    /**
     * @var mixed
     */
    public $invoice;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->estimate = $data['estimate'] ?? null;
        $this->invoice = $data['invoice'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->estimate !== null) {
            $result['estimate'] = $this->estimate;
        }
        if ($this->invoice !== null) {
            $result['invoice'] = $this->invoice;
        }
        return $result;
    }
}
