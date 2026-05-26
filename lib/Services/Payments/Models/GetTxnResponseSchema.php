<?php

namespace HighLevel\Services\Payments\Models;

/**
 * GetTxnResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class GetTxnResponseSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $contact_snapshot = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $status = null;

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
    public ?string $entity_type = null;

    /**
     * @var string|null
     */
    public ?string $entity_id = null;

    /**
     * @var mixed
     */
    public mixed $entity_source;

    /**
     * @var string|null
     */
    public ?string $charge_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $charge_snapshot = null;

    /**
     * @var string|null
     */
    public ?string $invoice_id = null;

    /**
     * @var string|null
     */
    public ?string $subscription_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_provider = null;

    /**
     * @var string|null
     */
    public ?string $ip_address = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var bool|null
     */
    public ?bool $mark_as_test = null;

    /**
     * @var bool|null
     */
    public ?bool $is_parent = null;

    /**
     * @var float|null
     */
    public ?float $amount_refunded = null;

    /**
     * @var string|null
     */
    public ?string $receipt_id = null;

    /**
     * @var bool|null
     */
    public ?bool $qbo_synced = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $qbo_response = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * @var string|null
     */
    public ?string $merged_from_contact_id = null;

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
        $this->alt_type = $data['altType'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
        $this->contact_snapshot = $data['contactSnapshot'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->entity_type = $data['entityType'] ?? null;
        $this->entity_id = $data['entityId'] ?? null;
        $this->entity_source = $data['entitySource'] ?? null;
        $this->charge_id = $data['chargeId'] ?? null;
        $this->charge_snapshot = $data['chargeSnapshot'] ?? null;
        $this->invoice_id = $data['invoiceId'] ?? null;
        $this->subscription_id = $data['subscriptionId'] ?? null;
        $this->payment_provider = $data['paymentProvider'] ?? null;
        $this->ip_address = $data['ipAddress'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->mark_as_test = $data['markAsTest'] ?? null;
        $this->is_parent = $data['isParent'] ?? null;
        $this->amount_refunded = $data['amountRefunded'] ?? null;
        $this->receipt_id = $data['receiptId'] ?? null;
        $this->qbo_synced = $data['qboSynced'] ?? null;
        $this->qbo_response = $data['qboResponse'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
        $this->merged_from_contact_id = $data['mergedFromContactId'] ?? null;
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
