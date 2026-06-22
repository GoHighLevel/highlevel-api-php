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
        if ($this->subtotal !== null) {
            $result['subtotal'] = $this->subtotal;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->total_products !== null) {
            $result['totalProducts'] = $this->total_products;
        }
        if ($this->source_type !== null) {
            $result['sourceType'] = $this->source_type;
        }
        if ($this->source_name !== null) {
            $result['sourceName'] = $this->source_name;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->source_meta !== null) {
            $result['sourceMeta'] = $this->source_meta;
        }
        if ($this->coupon_code !== null) {
            $result['couponCode'] = $this->coupon_code;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->source_sub_type !== null) {
            $result['sourceSubType'] = $this->source_sub_type;
        }
        if ($this->fulfillment_status !== null) {
            $result['fulfillmentStatus'] = $this->fulfillment_status;
        }
        if ($this->onetime_products !== null) {
            $result['onetimeProducts'] = $this->onetime_products;
        }
        if ($this->recurring_products !== null) {
            $result['recurringProducts'] = $this->recurring_products;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        return $result;
    }
}
