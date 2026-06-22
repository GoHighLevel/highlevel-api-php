<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * UpdateEstimateDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class UpdateEstimateDto
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
     * @var array&lt;EstimateLineItemDto&gt;
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
    public $contact_details;

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
    public $sent_to;

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
    public $send_estimate_details;

    /**
     * @var mixed
     */
    public $frequency_settings;

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
    public $auto_invoice;

    /**
     * @var mixed
     */
    public $miscellaneous_charges;

    /**
     * @var mixed
     */
    public $payment_schedule_config;

    /**
     * @var string|null
     */
    public ?string $estimate_status = null;

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
        // Handle array of EstimateLineItemDto objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new EstimateLineItemDto($item) : $item;
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
        $this->estimate_status = $data['estimateStatus'] ?? null;
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
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
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
        if ($this->contact_details !== null) {
            $result['contactDetails'] = $this->contact_details;
        }
        if ($this->estimate_number !== null) {
            $result['estimateNumber'] = $this->estimate_number;
        }
        if ($this->issue_date !== null) {
            $result['issueDate'] = $this->issue_date;
        }
        if ($this->expiry_date !== null) {
            $result['expiryDate'] = $this->expiry_date;
        }
        if ($this->sent_to !== null) {
            $result['sentTo'] = $this->sent_to;
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->send_estimate_details !== null) {
            $result['sendEstimateDetails'] = $this->send_estimate_details;
        }
        if ($this->frequency_settings !== null) {
            $result['frequencySettings'] = $this->frequency_settings;
        }
        if ($this->estimate_number_prefix !== null) {
            $result['estimateNumberPrefix'] = $this->estimate_number_prefix;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->auto_invoice !== null) {
            $result['autoInvoice'] = $this->auto_invoice;
        }
        if ($this->miscellaneous_charges !== null) {
            $result['miscellaneousCharges'] = $this->miscellaneous_charges;
        }
        if ($this->payment_schedule_config !== null) {
            $result['paymentScheduleConfig'] = $this->payment_schedule_config;
        }
        if ($this->estimate_status !== null) {
            $result['estimateStatus'] = $this->estimate_status;
        }
        return $result;
    }
}
