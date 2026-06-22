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
    public $entity_source;

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
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
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
        if ($this->charge_id !== null) {
            $result['chargeId'] = $this->charge_id;
        }
        if ($this->charge_snapshot !== null) {
            $result['chargeSnapshot'] = $this->charge_snapshot;
        }
        if ($this->invoice_id !== null) {
            $result['invoiceId'] = $this->invoice_id;
        }
        if ($this->subscription_id !== null) {
            $result['subscriptionId'] = $this->subscription_id;
        }
        if ($this->payment_provider !== null) {
            $result['paymentProvider'] = $this->payment_provider;
        }
        if ($this->ip_address !== null) {
            $result['ipAddress'] = $this->ip_address;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->mark_as_test !== null) {
            $result['markAsTest'] = $this->mark_as_test;
        }
        if ($this->is_parent !== null) {
            $result['isParent'] = $this->is_parent;
        }
        if ($this->amount_refunded !== null) {
            $result['amountRefunded'] = $this->amount_refunded;
        }
        if ($this->receipt_id !== null) {
            $result['receiptId'] = $this->receipt_id;
        }
        if ($this->qbo_synced !== null) {
            $result['qboSynced'] = $this->qbo_synced;
        }
        if ($this->qbo_response !== null) {
            $result['qboResponse'] = $this->qbo_response;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        if ($this->merged_from_contact_id !== null) {
            $result['mergedFromContactId'] = $this->merged_from_contact_id;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        return $result;
    }
}
