<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateInvoiceTemplateResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateInvoiceTemplateResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var mixed
     */
    public $business_details;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var mixed
     */
    public $discount;

    /**
     * @var array&lt;string&gt;
     */
    public array $items;

    /**
     * @var string|null
     */
    public ?string $invoice_number_prefix = null;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->business_details = $data['businessDetails'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->discount = $data['discount'] ?? null;
        $this->items = $data['items'] ?? [];
        $this->invoice_number_prefix = $data['invoiceNumberPrefix'] ?? null;
        $this->total = $data['total'] ?? 0;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = $this->business_details;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->invoice_number_prefix !== null) {
            $result['invoiceNumberPrefix'] = $this->invoice_number_prefix;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
