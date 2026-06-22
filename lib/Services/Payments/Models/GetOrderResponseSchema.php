<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public $amount_summary;

    /**
     * @var mixed
     */
    public $source;

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
        if ($this->fulfillment_status !== null) {
            $result['fulfillmentStatus'] = $this->fulfillment_status;
        }
        if ($this->contact_snapshot !== null) {
            $result['contactSnapshot'] = $this->contact_snapshot;
        }
        if ($this->amount_summary !== null) {
            $result['amountSummary'] = $this->amount_summary;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        if ($this->tracking_id !== null) {
            $result['trackingId'] = $this->tracking_id;
        }
        if ($this->fingerprint !== null) {
            $result['fingerprint'] = $this->fingerprint;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->mark_as_test !== null) {
            $result['markAsTest'] = $this->mark_as_test;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        if ($this->automatic_taxes_calculated !== null) {
            $result['automaticTaxesCalculated'] = $this->automatic_taxes_calculated;
        }
        if ($this->tax_calculation_provider !== null) {
            $result['taxCalculationProvider'] = $this->tax_calculation_provider;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        return $result;
    }
}
