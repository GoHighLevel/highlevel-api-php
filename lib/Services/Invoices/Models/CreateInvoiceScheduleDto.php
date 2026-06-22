<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateInvoiceScheduleDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateInvoiceScheduleDto
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
     * @var ContactDetailsDto
     */
    public ContactDetailsDto $contact_details;

    /**
     * @var ScheduleOptionsDto
     */
    public ScheduleOptionsDto $schedule;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var BusinessDetailsDto
     */
    public BusinessDetailsDto $business_details;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var array&lt;InvoiceItemDto&gt;
     */
    public array $items;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var DiscountDto
     */
    public DiscountDto $discount;

    /**
     * @var string|null
     */
    public ?string $terms_notes = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var mixed
     */
    public $tips_configuration;

    /**
     * @var mixed
     */
    public $late_fees_configuration;

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
        // Handle single ContactDetailsDto object
        if (isset($data['contactDetails']) && is_array($data['contactDetails'])) {
            $this->contact_details = new ContactDetailsDto($data['contactDetails']);
        } else {
            $this->contact_details = $data['contactDetails'] ?? null;
        }
        // Handle single ScheduleOptionsDto object
        if (isset($data['schedule']) && is_array($data['schedule'])) {
            $this->schedule = new ScheduleOptionsDto($data['schedule']);
        } else {
            $this->schedule = $data['schedule'] ?? null;
        }
        $this->live_mode = $data['liveMode'] ?? false;
        // Handle single BusinessDetailsDto object
        if (isset($data['businessDetails']) && is_array($data['businessDetails'])) {
            $this->business_details = new BusinessDetailsDto($data['businessDetails']);
        } else {
            $this->business_details = $data['businessDetails'] ?? null;
        }
        $this->currency = $data['currency'] ?? '';
        // Handle array of InvoiceItemDto objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new InvoiceItemDto($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        // Handle single DiscountDto object
        if (isset($data['discount']) && is_array($data['discount'])) {
            $this->discount = new DiscountDto($data['discount']);
        } else {
            $this->discount = $data['discount'] ?? null;
        }
        $this->terms_notes = $data['termsNotes'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->tips_configuration = $data['tipsConfiguration'] ?? null;
        $this->late_fees_configuration = $data['lateFeesConfiguration'] ?? null;
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
        if ($this->contact_details !== null) {
            $result['contactDetails'] = is_object($this->contact_details) && method_exists($this->contact_details, 'toArray') 
                ? $this->contact_details->toArray() 
                : $this->contact_details;
        }
        if ($this->schedule !== null) {
            $result['schedule'] = is_object($this->schedule) && method_exists($this->schedule, 'toArray') 
                ? $this->schedule->toArray() 
                : $this->schedule;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = is_object($this->business_details) && method_exists($this->business_details, 'toArray') 
                ? $this->business_details->toArray() 
                : $this->business_details;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->discount !== null) {
            $result['discount'] = is_object($this->discount) && method_exists($this->discount, 'toArray') 
                ? $this->discount->toArray() 
                : $this->discount;
        }
        if ($this->terms_notes !== null) {
            $result['termsNotes'] = $this->terms_notes;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->tips_configuration !== null) {
            $result['tipsConfiguration'] = $this->tips_configuration;
        }
        if ($this->late_fees_configuration !== null) {
            $result['lateFeesConfiguration'] = $this->late_fees_configuration;
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
