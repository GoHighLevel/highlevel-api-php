<?php

namespace HighLevel\Services\Payments\Models;

/**
 * GetSubscriptionResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class GetSubscriptionResponseSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $alt_type;

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
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $coupon = null;

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
    public $entity_source;

    /**
     * @var string|null
     */
    public ?string $subscription_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $subscription_snapshot = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_provider = null;

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
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var bool|null
     */
    public ?bool $mark_as_test = null;

    /**
     * @var mixed
     */
    public $schedule;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $auto_payment = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $recurring_product = null;

    /**
     * @var string|null
     */
    public ?string $canceled_at = null;

    /**
     * @var string|null
     */
    public ?string $canceled_by = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

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
        $this->alt_type = $data['altType'] ?? null;
        $this->alt_id = $data['altId'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
        $this->contact_snapshot = $data['contactSnapshot'] ?? null;
        $this->coupon = $data['coupon'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->entity_type = $data['entityType'] ?? null;
        $this->entity_id = $data['entityId'] ?? null;
        $this->entity_source = $data['entitySource'] ?? null;
        $this->subscription_id = $data['subscriptionId'] ?? null;
        $this->subscription_snapshot = $data['subscriptionSnapshot'] ?? null;
        $this->payment_provider = $data['paymentProvider'] ?? null;
        $this->ip_address = $data['ipAddress'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->meta = $data['meta'] ?? null;
        $this->mark_as_test = $data['markAsTest'] ?? null;
        $this->schedule = $data['schedule'] ?? null;
        $this->auto_payment = $data['autoPayment'] ?? null;
        $this->recurring_product = $data['recurringProduct'] ?? null;
        $this->canceled_at = $data['canceledAt'] ?? null;
        $this->canceled_by = $data['canceledBy'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->contact_snapshot !== null) {
            $result['contactSnapshot'] = $this->contact_snapshot;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
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
        if ($this->entity_source !== null) {
            $result['entitySource'] = $this->entity_source;
        }
        if ($this->subscription_id !== null) {
            $result['subscriptionId'] = $this->subscription_id;
        }
        if ($this->subscription_snapshot !== null) {
            $result['subscriptionSnapshot'] = $this->subscription_snapshot;
        }
        if ($this->payment_provider !== null) {
            $result['paymentProvider'] = $this->payment_provider;
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
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->mark_as_test !== null) {
            $result['markAsTest'] = $this->mark_as_test;
        }
        if ($this->schedule !== null) {
            $result['schedule'] = $this->schedule;
        }
        if ($this->auto_payment !== null) {
            $result['autoPayment'] = $this->auto_payment;
        }
        if ($this->recurring_product !== null) {
            $result['recurringProduct'] = $this->recurring_product;
        }
        if ($this->canceled_at !== null) {
            $result['canceledAt'] = $this->canceled_at;
        }
        if ($this->canceled_by !== null) {
            $result['canceledBy'] = $this->canceled_by;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        return $result;
    }
}
