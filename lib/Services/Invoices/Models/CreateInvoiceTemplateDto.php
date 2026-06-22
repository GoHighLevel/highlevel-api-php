<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateInvoiceTemplateDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateInvoiceTemplateDto
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
     * @var bool|null
     */
    public ?bool $internal = null;

    /**
     * @var string
     */
    public string $name;

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
     * @var DiscountDto|null
     */
    public ?DiscountDto $discount = null;

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
     * @var array&lt;string&gt;|null
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
        $this->internal = $data['internal'] ?? null;
        $this->name = $data['name'] ?? '';
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
        $this->attachments = $data['attachments'] ?? null;
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
        if ($this->internal !== null) {
            $result['internal'] = $this->internal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
            $result['attachments'] = $this->attachments;
        }
        if ($this->miscellaneous_charges !== null) {
            $result['miscellaneousCharges'] = $this->miscellaneous_charges;
        }
        return $result;
    }
}
