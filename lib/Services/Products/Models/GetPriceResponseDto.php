<?php

namespace HighLevel\Services\Products\Models;

/**
 * GetPriceResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class GetPriceResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;MembershipOfferDto&gt;|null
     */
    public ?array $membership_offers = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $variant_option_ids = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $product = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var mixed
     */
    public $recurring;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var float|null
     */
    public ?float $compare_at_price = null;

    /**
     * @var bool|null
     */
    public ?bool $track_inventory = null;

    /**
     * @var float|null
     */
    public ?float $available_quantity = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_out_of_stock_purchases = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        // Handle array of MembershipOfferDto objects
        if (isset($data['membershipOffers']) && is_array($data['membershipOffers'])) {
            $this->membership_offers = array_map(function($item) {
                return is_array($item) ? new MembershipOfferDto($item) : $item;
            }, $data['membershipOffers']);
        } else {
            $this->membership_offers = $data['membershipOffers'] ?? null;
        }
        $this->variant_option_ids = $data['variantOptionIds'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->product = $data['product'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->recurring = $data['recurring'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->compare_at_price = $data['compareAtPrice'] ?? null;
        $this->track_inventory = $data['trackInventory'] ?? null;
        $this->available_quantity = $data['availableQuantity'] ?? null;
        $this->allow_out_of_stock_purchases = $data['allowOutOfStockPurchases'] ?? null;
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
        if ($this->membership_offers !== null) {
            $result['membershipOffers'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->membership_offers);
        }
        if ($this->variant_option_ids !== null) {
            $result['variantOptionIds'] = $this->variant_option_ids;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->recurring !== null) {
            $result['recurring'] = $this->recurring;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->compare_at_price !== null) {
            $result['compareAtPrice'] = $this->compare_at_price;
        }
        if ($this->track_inventory !== null) {
            $result['trackInventory'] = $this->track_inventory;
        }
        if ($this->available_quantity !== null) {
            $result['availableQuantity'] = $this->available_quantity;
        }
        if ($this->allow_out_of_stock_purchases !== null) {
            $result['allowOutOfStockPurchases'] = $this->allow_out_of_stock_purchases;
        }
        return $result;
    }
}
