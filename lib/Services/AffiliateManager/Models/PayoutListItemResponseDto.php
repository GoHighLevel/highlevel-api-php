<?php

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * PayoutListItemResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class PayoutListItemResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $affiliate_id;

    /**
     * @var string|null
     */
    public ?string $campaign_id = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $payout_month = null;

    /**
     * @var string|null
     */
    public ?string $due_at = null;

    /**
     * @var string|null
     */
    public ?string $paid_at = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $paid_meta = null;

    /**
     * @var string|null
     */
    public ?string $paid_method = null;

    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var bool|null
     */
    public ?bool $is_migrated = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $campaign = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_name = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_email = null;

    /**
     * @var string|null
     */
    public ?string $payout_method = null;

    /**
     * @var mixed
     */
    public mixed $affiliate;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->affiliate_id = $data['affiliateId'] ?? '';
        $this->campaign_id = $data['campaignId'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->status = $data['status'] ?? null;
        $this->payout_month = $data['payoutMonth'] ?? null;
        $this->due_at = $data['dueAt'] ?? null;
        $this->paid_at = $data['paidAt'] ?? null;
        $this->paid_meta = $data['paidMeta'] ?? null;
        $this->paid_method = $data['paidMethod'] ?? null;
        $this->alt_id = $data['altId'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->is_migrated = $data['isMigrated'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->campaign = $data['campaign'] ?? null;
        $this->affiliate_name = $data['affiliateName'] ?? null;
        $this->affiliate_email = $data['affiliateEmail'] ?? null;
        $this->payout_method = $data['payoutMethod'] ?? null;
        $this->affiliate = $data['affiliate'] ?? null;
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
