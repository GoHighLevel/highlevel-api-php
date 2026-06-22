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
    public $affiliate;

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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->affiliate_id !== null) {
            $result['affiliateId'] = $this->affiliate_id;
        }
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
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
        if ($this->payout_month !== null) {
            $result['payoutMonth'] = $this->payout_month;
        }
        if ($this->due_at !== null) {
            $result['dueAt'] = $this->due_at;
        }
        if ($this->paid_at !== null) {
            $result['paidAt'] = $this->paid_at;
        }
        if ($this->paid_meta !== null) {
            $result['paidMeta'] = $this->paid_meta;
        }
        if ($this->paid_method !== null) {
            $result['paidMethod'] = $this->paid_method;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->is_migrated !== null) {
            $result['isMigrated'] = $this->is_migrated;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->campaign !== null) {
            $result['campaign'] = $this->campaign;
        }
        if ($this->affiliate_name !== null) {
            $result['affiliateName'] = $this->affiliate_name;
        }
        if ($this->affiliate_email !== null) {
            $result['affiliateEmail'] = $this->affiliate_email;
        }
        if ($this->payout_method !== null) {
            $result['payoutMethod'] = $this->payout_method;
        }
        if ($this->affiliate !== null) {
            $result['affiliate'] = $this->affiliate;
        }
        return $result;
    }
}
