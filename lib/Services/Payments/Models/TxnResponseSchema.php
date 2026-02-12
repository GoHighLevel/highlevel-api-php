<?php

namespace HighLevel\Services\Payments\Models;

/**
 * TxnResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class TxnResponseSchema
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
    public ?string $merged_from_contact_id = null;

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
     * @var array&lt;string, mixed&gt;
     */
    public string $status;

    /**
     * @var bool|null
     */
    public ?bool $live_mode = null;

    /**
     * @var string|null
     */
    public ?string $entity_type = null;

    /**
     * @var string|null
     */
    public ?string $entity_id = null;

    /**
     * @var string
     */
    public string $entity_source_type;

    /**
     * @var string|null
     */
    public ?string $entity_source_sub_type = null;

    /**
     * @var string|null
     */
    public ?string $entity_source_name = null;

    /**
     * @var string|null
     */
    public ?string $entity_source_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $entity_source_meta = null;

    /**
     * @var string|null
     */
    public ?string $subscription_id = null;

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
    public ?string $payment_provider_type = null;

    /**
     * @var string|null
     */
    public ?string $payment_provider_connected_account = null;

    /**
     * @var string|null
     */
    public ?string $ip_address = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var float|null
     */
    public ?float $amount_refunded = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_method = null;

    /**
     * @var string
     */
    public string $fulfilled_at;

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
        $this->merged_from_contact_id = $data['mergedFromContactId'] ?? null;
        $this->contact_name = $data['contactName'] ?? null;
        $this->contact_email = $data['contactEmail'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->entity_type = $data['entityType'] ?? null;
        $this->entity_id = $data['entityId'] ?? null;
        $this->entity_source_type = $data['entitySourceType'] ?? '';
        $this->entity_source_sub_type = $data['entitySourceSubType'] ?? null;
        $this->entity_source_name = $data['entitySourceName'] ?? null;
        $this->entity_source_id = $data['entitySourceId'] ?? null;
        $this->entity_source_meta = $data['entitySourceMeta'] ?? null;
        $this->subscription_id = $data['subscriptionId'] ?? null;
        $this->charge_id = $data['chargeId'] ?? null;
        $this->charge_snapshot = $data['chargeSnapshot'] ?? null;
        $this->payment_provider_type = $data['paymentProviderType'] ?? null;
        $this->payment_provider_connected_account = $data['paymentProviderConnectedAccount'] ?? null;
        $this->ip_address = $data['ipAddress'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->amount_refunded = $data['amountRefunded'] ?? null;
        $this->payment_method = $data['paymentMethod'] ?? null;
        $this->fulfilled_at = $data['fulfilledAt'] ?? '';
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
