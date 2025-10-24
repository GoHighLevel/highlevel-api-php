<?php

namespace HighLevel\Services\Payments\Models;

/**
 * OrderResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class OrderResponseSchema
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
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $contact_name = null;

    /**
     * @var string|null
     */
    public ?string $contact_email = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var float|null
     */
    public ?float $subtotal = null;

    /**
     * @var float|null
     */
    public ?float $discount = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool|null
     */
    public ?bool $live_mode = null;

    /**
     * @var float|null
     */
    public ?float $total_products = null;

    /**
     * @var string
     */
    public string $source_type;

    /**
     * @var string|null
     */
    public ?string $source_name = null;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $source_meta = null;

    /**
     * @var string|null
     */
    public ?string $coupon_code = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $source_sub_type = null;

    /**
     * @var string|null
     */
    public ?string $fulfillment_status = null;

    /**
     * @var float|null
     */
    public ?float $onetime_products = null;

    /**
     * @var float|null
     */
    public ?float $recurring_products = null;

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
        $this->contact_id = $data['contactId'] ?? null;
        $this->contact_name = $data['contactName'] ?? null;
        $this->contact_email = $data['contactEmail'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->subtotal = $data['subtotal'] ?? null;
        $this->discount = $data['discount'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->live_mode = $data['liveMode'] ?? null;
        $this->total_products = $data['totalProducts'] ?? null;
        $this->source_type = $data['sourceType'] ?? '';
        $this->source_name = $data['sourceName'] ?? null;
        $this->source_id = $data['sourceId'] ?? null;
        $this->source_meta = $data['sourceMeta'] ?? null;
        $this->coupon_code = $data['couponCode'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->source_sub_type = $data['sourceSubType'] ?? null;
        $this->fulfillment_status = $data['fulfillmentStatus'] ?? null;
        $this->onetime_products = $data['onetimeProducts'] ?? null;
        $this->recurring_products = $data['recurringProducts'] ?? null;
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
