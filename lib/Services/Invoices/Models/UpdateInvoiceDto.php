<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * UpdateInvoiceDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class UpdateInvoiceDto
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
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var mixed
     */
    public $business_details;

    /**
     * @var string|null
     */
    public ?string $invoice_number = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var ContactDetailsDto|null
     */
    public ?ContactDetailsDto $contact_details = null;

    /**
     * @var string|null
     */
    public ?string $terms_notes = null;

    /**
     * @var DiscountDto|null
     */
    public ?DiscountDto $discount = null;

    /**
     * @var array&lt;InvoiceItemDto&gt;
     */
    public array $invoice_items;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $live_mode = null;

    /**
     * @var string
     */
    public string $issue_date;

    /**
     * @var string
     */
    public string $due_date;

    /**
     * @var mixed
     */
    public $payment_schedule;

    /**
     * @var mixed
     */
    public $tips_configuration;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $xero_details = null;

    /**
     * @var string|null
     */
    public ?string $invoice_number_prefix = null;

    /**
     * @var mixed
     */
    public $payment_methods;

    /**
     * @var array&lt;AttachmentsDto&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var mixed
     */
    public $miscellaneous_charges;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->business_details = $data['businessDetails'] ?? null;
        $this->invoice_number = $data['invoiceNumber'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        // Handle single ContactDetailsDto object
        if (isset($data['contactDetails']) && is_array($data['contactDetails'])) {
            $this->contact_details = new ContactDetailsDto($data['contactDetails']);
        } else {
            $this->contact_details = $data['contactDetails'] ?? null;
        }
        $this->terms_notes = $data['termsNotes'] ?? null;
        // Handle single DiscountDto object
        if (isset($data['discount']) && is_array($data['discount'])) {
            $this->discount = new DiscountDto($data['discount']);
        } else {
            $this->discount = $data['discount'] ?? null;
        }
        // Handle array of InvoiceItemDto objects
        if (isset($data['invoiceItems']) && is_array($data['invoiceItems'])) {
            $this->invoice_items = array_map(function($item) {
                return is_array($item) ? new InvoiceItemDto($item) : $item;
            }, $data['invoiceItems']);
        } else {
            $this->invoice_items = $data['invoiceItems'] ?? [];
        }
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->issue_date = $data['issueDate'] ?? '';
        $this->due_date = $data['dueDate'] ?? '';
        $this->payment_schedule = $data['paymentSchedule'] ?? null;
        $this->tips_configuration = $data['tipsConfiguration'] ?? null;
        $this->xero_details = $data['xeroDetails'] ?? null;
        $this->invoice_number_prefix = $data['invoiceNumberPrefix'] ?? null;
        $this->payment_methods = $data['paymentMethods'] ?? null;
        // Handle array of AttachmentsDto objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new AttachmentsDto($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->miscellaneous_charges = $data['miscellaneousCharges'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = $this->business_details;
        }
        if ($this->invoice_number !== null) {
            $result['invoiceNumber'] = $this->invoice_number;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->contact_details !== null) {
            $result['contactDetails'] = is_object($this->contact_details) && method_exists($this->contact_details, 'toArray') 
                ? $this->contact_details->toArray() 
                : $this->contact_details;
        }
        if ($this->terms_notes !== null) {
            $result['termsNotes'] = $this->terms_notes;
        }
        if ($this->discount !== null) {
            $result['discount'] = is_object($this->discount) && method_exists($this->discount, 'toArray') 
                ? $this->discount->toArray() 
                : $this->discount;
        }
        if ($this->invoice_items !== null) {
            $result['invoiceItems'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->invoice_items);
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->issue_date !== null) {
            $result['issueDate'] = $this->issue_date;
        }
        if ($this->due_date !== null) {
            $result['dueDate'] = $this->due_date;
        }
        if ($this->payment_schedule !== null) {
            $result['paymentSchedule'] = $this->payment_schedule;
        }
        if ($this->tips_configuration !== null) {
            $result['tipsConfiguration'] = $this->tips_configuration;
        }
        if ($this->xero_details !== null) {
            $result['xeroDetails'] = $this->xero_details;
        }
        if ($this->invoice_number_prefix !== null) {
            $result['invoiceNumberPrefix'] = $this->invoice_number_prefix;
        }
        if ($this->payment_methods !== null) {
            $result['paymentMethods'] = $this->payment_methods;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->miscellaneous_charges !== null) {
            $result['miscellaneousCharges'] = $this->miscellaneous_charges;
        }
        return $result;
    }
}
