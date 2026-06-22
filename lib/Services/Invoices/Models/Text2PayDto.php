<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * Text2PayDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class Text2PayDto
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
     * @var string
     */
    public string $currency;

    /**
     * @var array&lt;InvoiceItemDto&gt;
     */
    public array $items;

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
    public $contact_details;

    /**
     * @var string|null
     */
    public ?string $invoice_number = null;

    /**
     * @var string
     */
    public string $issue_date;

    /**
     * @var string|null
     */
    public ?string $due_date = null;

    /**
     * @var SentToDto
     */
    public SentToDto $sent_to;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var mixed
     */
    public $payment_schedule;

    /**
     * @var mixed
     */
    public $late_fees_configuration;

    /**
     * @var mixed
     */
    public $tips_configuration;

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
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var bool|null
     */
    public ?bool $include_terms_note = null;

    /**
     * @var string
     */
    public string $action;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var DiscountDto|null
     */
    public ?DiscountDto $discount = null;

    /**
     * @var BusinessDetailsDto|null
     */
    public ?BusinessDetailsDto $business_details = null;

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
        $this->currency = $data['currency'] ?? '';
        // Handle array of InvoiceItemDto objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new InvoiceItemDto($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->terms_notes = $data['termsNotes'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->invoice_number = $data['invoiceNumber'] ?? null;
        $this->issue_date = $data['issueDate'] ?? '';
        $this->due_date = $data['dueDate'] ?? null;
        // Handle single SentToDto object
        if (isset($data['sentTo']) && is_array($data['sentTo'])) {
            $this->sent_to = new SentToDto($data['sentTo']);
        } else {
            $this->sent_to = $data['sentTo'] ?? null;
        }
        $this->live_mode = $data['liveMode'] ?? false;
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->payment_schedule = $data['paymentSchedule'] ?? null;
        $this->late_fees_configuration = $data['lateFeesConfiguration'] ?? null;
        $this->tips_configuration = $data['tipsConfiguration'] ?? null;
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
        $this->id = $data['id'] ?? null;
        $this->include_terms_note = $data['includeTermsNote'] ?? null;
        $this->action = $data['action'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        // Handle single DiscountDto object
        if (isset($data['discount']) && is_array($data['discount'])) {
            $this->discount = new DiscountDto($data['discount']);
        } else {
            $this->discount = $data['discount'] ?? null;
        }
        // Handle single BusinessDetailsDto object
        if (isset($data['businessDetails']) && is_array($data['businessDetails'])) {
            $this->business_details = new BusinessDetailsDto($data['businessDetails']);
        } else {
            $this->business_details = $data['businessDetails'] ?? null;
        }
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
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->terms_notes !== null) {
            $result['termsNotes'] = $this->terms_notes;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->contact_details !== null) {
            $result['contactDetails'] = $this->contact_details;
        }
        if ($this->invoice_number !== null) {
            $result['invoiceNumber'] = $this->invoice_number;
        }
        if ($this->issue_date !== null) {
            $result['issueDate'] = $this->issue_date;
        }
        if ($this->due_date !== null) {
            $result['dueDate'] = $this->due_date;
        }
        if ($this->sent_to !== null) {
            $result['sentTo'] = is_object($this->sent_to) && method_exists($this->sent_to, 'toArray') 
                ? $this->sent_to->toArray() 
                : $this->sent_to;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->payment_schedule !== null) {
            $result['paymentSchedule'] = $this->payment_schedule;
        }
        if ($this->late_fees_configuration !== null) {
            $result['lateFeesConfiguration'] = $this->late_fees_configuration;
        }
        if ($this->tips_configuration !== null) {
            $result['tipsConfiguration'] = $this->tips_configuration;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->include_terms_note !== null) {
            $result['includeTermsNote'] = $this->include_terms_note;
        }
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->discount !== null) {
            $result['discount'] = is_object($this->discount) && method_exists($this->discount, 'toArray') 
                ? $this->discount->toArray() 
                : $this->discount;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = is_object($this->business_details) && method_exists($this->business_details, 'toArray') 
                ? $this->business_details->toArray() 
                : $this->business_details;
        }
        return $result;
    }
}
