<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * CommissionListItemResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class CommissionListItemResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $product_id = null;

    /**
     * @var string|null
     */
    public ?string $product_name = null;

    /**
     * @var float|null
     */
    public ?float $qty = null;

    /**
     * @var float|null
     */
    public ?float $product_commission = null;

    /**
     * @var float|null
     */
    public ?float $commission_amount = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var float|null
     */
    public ?float $unit_discount = null;

    /**
     * @var string|null
     */
    public ?string $campaign_name = null;

    /**
     * @var float|null
     */
    public ?float $commission = null;

    /**
     * @var string|null
     */
    public ?string $commission_type = null;

    /**
     * @var string|null
     */
    public ?string $transaction_at = null;

    /**
     * @var string|null
     */
    public ?string $transaction_id = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_id = null;

    /**
     * @var string|null
     */
    public ?string $payout_id = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var bool|null
     */
    public ?bool $is_trial = null;

    /**
     * @var mixed
     */
    public $customer;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $event_id = null;

    /**
     * @var mixed
     */
    public $campaign;

    /**
     * @var mixed
     */
    public $affiliate;

    /**
     * @var string|null
     */
    public ?string $due_at = null;

    /**
     * @var bool|null
     */
    public ?bool $live_mode = null;

    /**
     * @var float|null
     */
    public ?float $tier = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->product_id = $data['productId'] ?? null;
        $this->product_name = $data['productName'] ?? null;
        $this->qty = $data['qty'] ?? null;
        $this->product_commission = $data['productCommission'] ?? null;
        $this->commission_amount = $data['commissionAmount'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->unit_discount = $data['unitDiscount'] ?? null;
        $this->campaign_name = $data['campaignName'] ?? null;
        $this->commission = $data['commission'] ?? null;
        $this->commission_type = $data['commissionType'] ?? null;
        $this->transaction_at = $data['transactionAt'] ?? null;
        $this->transaction_id = $data['transactionId'] ?? null;
        $this->affiliate_id = $data['affiliateId'] ?? null;
        $this->payout_id = $data['payoutId'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->is_trial = $data['isTrial'] ?? null;
        $this->customer = $data['customer'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->event_id = $data['eventId'] ?? null;
        $this->campaign = $data['campaign'] ?? null;
        $this->affiliate = $data['affiliate'] ?? null;
        $this->due_at = $data['dueAt'] ?? null;
        $this->live_mode = $data['liveMode'] ?? null;
        $this->tier = $data['tier'] ?? null;
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
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->product_name !== null) {
            $result['productName'] = $this->product_name;
        }
        if ($this->qty !== null) {
            $result['qty'] = $this->qty;
        }
        if ($this->product_commission !== null) {
            $result['productCommission'] = $this->product_commission;
        }
        if ($this->commission_amount !== null) {
            $result['commissionAmount'] = $this->commission_amount;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->unit_discount !== null) {
            $result['unitDiscount'] = $this->unit_discount;
        }
        if ($this->campaign_name !== null) {
            $result['campaignName'] = $this->campaign_name;
        }
        if ($this->commission !== null) {
            $result['commission'] = $this->commission;
        }
        if ($this->commission_type !== null) {
            $result['commissionType'] = $this->commission_type;
        }
        if ($this->transaction_at !== null) {
            $result['transactionAt'] = $this->transaction_at;
        }
        if ($this->transaction_id !== null) {
            $result['transactionId'] = $this->transaction_id;
        }
        if ($this->affiliate_id !== null) {
            $result['affiliateId'] = $this->affiliate_id;
        }
        if ($this->payout_id !== null) {
            $result['payoutId'] = $this->payout_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->is_trial !== null) {
            $result['isTrial'] = $this->is_trial;
        }
        if ($this->customer !== null) {
            $result['customer'] = $this->customer;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->event_id !== null) {
            $result['eventId'] = $this->event_id;
        }
        if ($this->campaign !== null) {
            $result['campaign'] = $this->campaign;
        }
        if ($this->affiliate !== null) {
            $result['affiliate'] = $this->affiliate;
        }
        if ($this->due_at !== null) {
            $result['dueAt'] = $this->due_at;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->tier !== null) {
            $result['tier'] = $this->tier;
        }
        return $result;
    }
}
