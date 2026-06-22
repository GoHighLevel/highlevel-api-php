<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * SubscriptionResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class SubscriptionResponseSchema
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
     * @var array&lt;string, mixed&gt;
     */
    public array $status;

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
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $subscription_snapshot = null;

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
     * @var string|null
     */
    public ?string $created_by = null;

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
        $this->status = $data['status'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->entity_type = $data['entityType'] ?? null;
        $this->entity_id = $data['entityId'] ?? null;
        $this->entity_source_type = $data['entitySourceType'] ?? '';
        $this->entity_source_name = $data['entitySourceName'] ?? null;
        $this->entity_source_id = $data['entitySourceId'] ?? null;
        $this->entity_source_meta = $data['entitySourceMeta'] ?? null;
        $this->subscription_id = $data['subscriptionId'] ?? null;
        $this->subscription_snapshot = $data['subscriptionSnapshot'] ?? null;
        $this->payment_provider_type = $data['paymentProviderType'] ?? null;
        $this->payment_provider_connected_account = $data['paymentProviderConnectedAccount'] ?? null;
        $this->ip_address = $data['ipAddress'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->created_by = $data['createdBy'] ?? null;
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->contact_name !== null) {
            $result['contactName'] = $this->contact_name;
        }
        if ($this->contact_email !== null) {
            $result['contactEmail'] = $this->contact_email;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->entity_type !== null) {
            $result['entityType'] = $this->entity_type;
        }
        if ($this->entity_id !== null) {
            $result['entityId'] = $this->entity_id;
        }
        if ($this->entity_source_type !== null) {
            $result['entitySourceType'] = $this->entity_source_type;
        }
        if ($this->entity_source_name !== null) {
            $result['entitySourceName'] = $this->entity_source_name;
        }
        if ($this->entity_source_id !== null) {
            $result['entitySourceId'] = $this->entity_source_id;
        }
        if ($this->entity_source_meta !== null) {
            $result['entitySourceMeta'] = $this->entity_source_meta;
        }
        if ($this->subscription_id !== null) {
            $result['subscriptionId'] = $this->subscription_id;
        }
        if ($this->subscription_snapshot !== null) {
            $result['subscriptionSnapshot'] = $this->subscription_snapshot;
        }
        if ($this->payment_provider_type !== null) {
            $result['paymentProviderType'] = $this->payment_provider_type;
        }
        if ($this->payment_provider_connected_account !== null) {
            $result['paymentProviderConnectedAccount'] = $this->payment_provider_connected_account;
        }
        if ($this->ip_address !== null) {
            $result['ipAddress'] = $this->ip_address;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        return $result;
    }
}
