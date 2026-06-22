<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * ListInvoicesResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ListInvoicesResponseDto
{
    /**
     * @var array&lt;GetInvoiceResponseDto&gt;
     */
    public array $invoices;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetInvoiceResponseDto objects
        if (isset($data['invoices']) && is_array($data['invoices'])) {
            $this->invoices = array_map(function($item) {
                return is_array($item) ? new GetInvoiceResponseDto($item) : $item;
            }, $data['invoices']);
        } else {
            $this->invoices = $data['invoices'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->invoices !== null) {
            $result['invoices'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->invoices);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
