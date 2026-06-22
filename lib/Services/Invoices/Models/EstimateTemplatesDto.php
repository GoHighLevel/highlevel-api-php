<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * EstimateTemplatesDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class EstimateTemplatesDto
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
     * @var array&lt;array&lt;mixed&gt;&gt;
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
     * @var string|null
     */
    public ?string $estimate_number_prefix = null;

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
        // Handle single BusinessDetailsDto object
        if (isset($data['businessDetails']) && is_array($data['businessDetails'])) {
            $this->business_details = new BusinessDetailsDto($data['businessDetails']);
        } else {
            $this->business_details = $data['businessDetails'] ?? null;
        }
        $this->currency = $data['currency'] ?? '';
        $this->items = $data['items'] ?? [];
        $this->live_mode = $data['liveMode'] ?? null;
        // Handle single DiscountDto object
        if (isset($data['discount']) && is_array($data['discount'])) {
            $this->discount = new DiscountDto($data['discount']);
        } else {
            $this->discount = $data['discount'] ?? null;
        }
        $this->terms_notes = $data['termsNotes'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->send_estimate_details = $data['sendEstimateDetails'] ?? null;
        $this->estimate_number_prefix = $data['estimateNumberPrefix'] ?? null;
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
        if ($this->business_details !== null) {
            $result['businessDetails'] = is_object($this->business_details) && method_exists($this->business_details, 'toArray') 
                ? $this->business_details->toArray() 
                : $this->business_details;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
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
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->send_estimate_details !== null) {
            $result['sendEstimateDetails'] = $this->send_estimate_details;
        }
        if ($this->estimate_number_prefix !== null) {
            $result['estimateNumberPrefix'] = $this->estimate_number_prefix;
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
