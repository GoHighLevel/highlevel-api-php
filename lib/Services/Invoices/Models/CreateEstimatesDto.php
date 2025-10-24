<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * CreateEstimatesDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CreateEstimatesDto
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
    public ?bool $live_mode = null;

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
    public mixed $contact_details;

    /**
     * @var float|null
     */
    public ?float $estimate_number = null;

    /**
     * @var string|null
     */
    public ?string $issue_date = null;

    /**
     * @var string|null
     */
    public ?string $expiry_date = null;

    /**
     * @var mixed
     */
    public mixed $sent_to;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var mixed
     */
    public mixed $send_estimate_details;

    /**
     * @var mixed
     */
    public mixed $frequency_settings;

    /**
     * @var string|null
     */
    public ?string $estimate_number_prefix = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var array&lt;AttachmentsDto&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var mixed
     */
    public mixed $auto_invoice;

    /**
     * @var mixed
     */
    public mixed $miscellaneous_charges;

    /**
     * @var mixed
     */
    public mixed $payment_schedule_config;

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
        $this->live_mode = $data['liveMode'] ?? null;
        // Handle single DiscountDto object
        if (isset($data['discount']) && is_array($data['discount'])) {
            $this->discount = new DiscountDto($data['discount']);
        } else {
            $this->discount = $data['discount'] ?? null;
        }
        $this->terms_notes = $data['termsNotes'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->estimate_number = $data['estimateNumber'] ?? null;
        $this->issue_date = $data['issueDate'] ?? null;
        $this->expiry_date = $data['expiryDate'] ?? null;
        $this->sent_to = $data['sentTo'] ?? null;
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->send_estimate_details = $data['sendEstimateDetails'] ?? null;
        $this->frequency_settings = $data['frequencySettings'] ?? null;
        $this->estimate_number_prefix = $data['estimateNumberPrefix'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        // Handle array of AttachmentsDto objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new AttachmentsDto($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->auto_invoice = $data['autoInvoice'] ?? null;
        $this->miscellaneous_charges = $data['miscellaneousCharges'] ?? null;
        $this->payment_schedule_config = $data['paymentScheduleConfig'] ?? null;
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
