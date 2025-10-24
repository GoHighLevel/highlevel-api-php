<?php

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
    public mixed $business_details;

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
    public mixed $payment_schedule;

    /**
     * @var mixed
     */
    public mixed $tips_configuration;

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
