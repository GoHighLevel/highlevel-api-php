<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateInvoiceFromEstimateDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateInvoiceFromEstimateDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var bool
     */
    public bool $mark_as_invoiced;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->mark_as_invoiced = $data['markAsInvoiced'] ?? false;
        $this->version = $data['version'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->mark_as_invoiced !== null) {
            $result['markAsInvoiced'] = $this->mark_as_invoiced;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }
}
