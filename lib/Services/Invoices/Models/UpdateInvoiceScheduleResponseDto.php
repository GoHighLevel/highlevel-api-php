<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * UpdateInvoiceScheduleResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class UpdateInvoiceScheduleResponseDto
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
    public mixed $business_details;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var mixed
     */
    public mixed $contact_details;

    /**
     * @var mixed
     */
    public mixed $discount;

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
