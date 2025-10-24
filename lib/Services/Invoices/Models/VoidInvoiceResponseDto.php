<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * VoidInvoiceResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class VoidInvoiceResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var float
     */
    public float $amount_paid;

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
     * @var array&lt;string, mixed&gt;
     */
    public array $business_details;

    /**
     * @var float
     */
    public float $invoice_number;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $contact_details;

    /**
     * @var string
     */
    public string $issue_date;

    /**
     * @var string
     */
    public string $due_date;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $discount = null;

    /**
     * @var array&lt;string&gt;
     */
    public array $invoice_items;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var float
     */
    public float $amount_due;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_calculated = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_schedule = null;

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
        $this->status = $data['status'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->amount_paid = $data['amountPaid'] ?? 0;
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->business_details = $data['businessDetails'] ?? null;
        $this->invoice_number = $data['invoiceNumber'] ?? 0;
        $this->currency = $data['currency'] ?? '';
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->issue_date = $data['issueDate'] ?? '';
        $this->due_date = $data['dueDate'] ?? '';
        $this->discount = $data['discount'] ?? null;
        $this->invoice_items = $data['invoiceItems'] ?? [];
        $this->total = $data['total'] ?? 0;
        $this->title = $data['title'] ?? '';
        $this->amount_due = $data['amountDue'] ?? 0;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? null;
        $this->automatic_taxes_calculated = $data['automaticTaxesCalculated'] ?? null;
        $this->payment_schedule = $data['paymentSchedule'] ?? null;
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
