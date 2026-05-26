<?php

namespace HighLevel\Services\Payments\Models;

/**
 * GetOrderResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class GetOrderResponseSchema
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
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool|null
     */
    public ?bool $live_mode = null;

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
    public ?string $fulfillment_status = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $contact_snapshot = null;

    /**
     * @var mixed
     */
    public mixed $amount_summary;

    /**
     * @var mixed
     */
    public mixed $source;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $items = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $coupon = null;

    /**
     * @var string|null
     */
    public ?string $tracking_id = null;

    /**
     * @var string|null
     */
    public ?string $fingerprint = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var bool|null
     */
    public ?bool $mark_as_test = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * @var bool|null
     */
    public ?bool $automatic_taxes_calculated = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $tax_calculation_provider = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

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
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->live_mode = $data['liveMode'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->fulfillment_status = $data['fulfillmentStatus'] ?? null;
        $this->contact_snapshot = $data['contactSnapshot'] ?? null;
        $this->amount_summary = $data['amountSummary'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->items = $data['items'] ?? null;
        $this->coupon = $data['coupon'] ?? null;
        $this->tracking_id = $data['trackingId'] ?? null;
        $this->fingerprint = $data['fingerprint'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->mark_as_test = $data['markAsTest'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
        $this->automatic_taxes_calculated = $data['automaticTaxesCalculated'] ?? null;
        $this->tax_calculation_provider = $data['taxCalculationProvider'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
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
