<?php

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
    public mixed $customer;

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
    public mixed $campaign;

    /**
     * @var mixed
     */
    public mixed $affiliate;

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
