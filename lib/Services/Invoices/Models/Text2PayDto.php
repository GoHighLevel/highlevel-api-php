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
    public mixed $contact_details;

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
    public mixed $payment_schedule;

    /**
     * @var mixed
     */
    public mixed $late_fees_configuration;

    /**
     * @var mixed
     */
    public mixed $tips_configuration;

    /**
     * @var string|null
     */
    public ?string $invoice_number_prefix = null;

    /**
     * @var mixed
     */
    public mixed $payment_methods;

    /**
     * @var array&lt;AttachmentsDto&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var mixed
     */
    public mixed $miscellaneous_charges;

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
