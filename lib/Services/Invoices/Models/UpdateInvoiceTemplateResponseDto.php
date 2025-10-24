<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * UpdateInvoiceTemplateResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class UpdateInvoiceTemplateResponseDto
{
    /**
     * @var string
     */
    public string $id;

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
    public mixed $discount;

    /**
     * @var array&lt;string&gt;
     */
    public array $items;

    /**
     * @var string|null
     */
    public ?string $invoice_number_prefix = null;

    /**
     * @var float
     */
    public float $total;

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
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->business_details = $data['businessDetails'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->discount = $data['discount'] ?? null;
        $this->items = $data['items'] ?? [];
        $this->invoice_number_prefix = $data['invoiceNumberPrefix'] ?? null;
        $this->total = $data['total'] ?? 0;
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
