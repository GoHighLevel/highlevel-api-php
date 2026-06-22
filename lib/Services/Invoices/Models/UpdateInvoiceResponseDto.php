<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * UpdateInvoiceResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class UpdateInvoiceResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var float
     */
    public float $amount_paid;

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
     * @var array&lt;string, mixed&gt;
     */
    public array $business_details;

    /**
     * @var float
     */
    public float $invoice_number;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $contact_details;

    /**
     * @var string
     */
    public string $issue_date;

    /**
     * @var string
     */
    public string $due_date;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $discount = null;

    /**
     * @var array&lt;string&gt;
     */
    public array $invoice_items;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var float
     */
    public float $amount_due;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_calculated = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_schedule = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->amount_paid = $data['amountPaid'] ?? 0;
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->business_details = $data['businessDetails'] ?? null;
        $this->invoice_number = $data['invoiceNumber'] ?? 0;
        $this->currency = $data['currency'] ?? '';
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->issue_date = $data['issueDate'] ?? '';
        $this->due_date = $data['dueDate'] ?? '';
        $this->discount = $data['discount'] ?? null;
        $this->invoice_items = $data['invoiceItems'] ?? [];
        $this->total = $data['total'] ?? 0;
        $this->title = $data['title'] ?? '';
        $this->amount_due = $data['amountDue'] ?? 0;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->automatic_taxes_calculated = $data['automaticTaxesCalculated'] ?? null;
        $this->payment_schedule = $data['paymentSchedule'] ?? null;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->amount_paid !== null) {
            $result['amountPaid'] = $this->amount_paid;
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
        if ($this->invoice_number !== null) {
            $result['invoiceNumber'] = $this->invoice_number;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->contact_details !== null) {
            $result['contactDetails'] = $this->contact_details;
        }
        if ($this->issue_date !== null) {
            $result['issueDate'] = $this->issue_date;
        }
        if ($this->due_date !== null) {
            $result['dueDate'] = $this->due_date;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->invoice_items !== null) {
            $result['invoiceItems'] = $this->invoice_items;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->amount_due !== null) {
            $result['amountDue'] = $this->amount_due;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->automatic_taxes_calculated !== null) {
            $result['automaticTaxesCalculated'] = $this->automatic_taxes_calculated;
        }
        if ($this->payment_schedule !== null) {
            $result['paymentSchedule'] = $this->payment_schedule;
        }
        return $result;
    }
}
