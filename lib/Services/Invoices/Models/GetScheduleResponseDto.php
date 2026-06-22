<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * GetScheduleResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class GetScheduleResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $status;

    /**
     * @var bool
     */
    public bool $live_mode;

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
     * @var ScheduleOptionsDto|null
     */
    public ?ScheduleOptionsDto $schedule = null;

    /**
     * @var array&lt;DefaultInvoiceResponseDto&gt;
     */
    public array $invoices;

    /**
     * @var mixed
     */
    public $business_details;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var mixed
     */
    public $contact_details;

    /**
     * @var mixed
     */
    public $discount;

    /**
     * @var array&lt;string&gt;
     */
    public array $items;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $terms_notes;

    /**
     * @var string
     */
    public string $compiled_terms_notes;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->status = $data['status'] ?? null;
        $this->live_mode = $data['liveMode'] ?? false;
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        // Handle single ScheduleOptionsDto object
        if (isset($data['schedule']) && is_array($data['schedule'])) {
            $this->schedule = new ScheduleOptionsDto($data['schedule']);
        } else {
            $this->schedule = $data['schedule'] ?? null;
        }
        // Handle array of DefaultInvoiceResponseDto objects
        if (isset($data['invoices']) && is_array($data['invoices'])) {
            $this->invoices = array_map(function($item) {
                return is_array($item) ? new DefaultInvoiceResponseDto($item) : $item;
            }, $data['invoices']);
        } else {
            $this->invoices = $data['invoices'] ?? [];
        }
        $this->business_details = $data['businessDetails'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->discount = $data['discount'] ?? null;
        $this->items = $data['items'] ?? [];
        $this->total = $data['total'] ?? 0;
        $this->title = $data['title'] ?? '';
        $this->terms_notes = $data['termsNotes'] ?? '';
        $this->compiled_terms_notes = $data['compiledTermsNotes'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->schedule !== null) {
            $result['schedule'] = is_object($this->schedule) && method_exists($this->schedule, 'toArray') 
                ? $this->schedule->toArray() 
                : $this->schedule;
        }
        if ($this->invoices !== null) {
            $result['invoices'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->invoices);
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = $this->business_details;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->contact_details !== null) {
            $result['contactDetails'] = $this->contact_details;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->terms_notes !== null) {
            $result['termsNotes'] = $this->terms_notes;
        }
        if ($this->compiled_terms_notes !== null) {
            $result['compiledTermsNotes'] = $this->compiled_terms_notes;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
