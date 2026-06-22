<?php

namespace HighLevel\Services\Products\Models;

/**
 * CreatePriceDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CreatePriceDto
{
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
    public ?string $description = null;

    /**
     * @var array&lt;MembershipOfferDto&gt;|null
     */
    public ?array $membership_offers = null;

    /**
     * @var float|null
     */
    public ?float $trial_period = null;

    /**
     * @var float|null
     */
    public ?float $total_cycles = null;

    /**
     * @var float|null
     */
    public ?float $setup_fee = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $variant_option_ids = null;

    /**
     * @var float|null
     */
    public ?float $compare_at_price = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var mixed
     */
    public $meta;

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
     * @var string|null
     */
    public ?string $sku = null;

    /**
     * @var mixed
     */
    public $shipping_options;

    /**
     * @var bool|null
     */
    public ?bool $is_digital_product = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $digital_delivery = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->recurring = $data['recurring'] ?? null;
        $this->description = $data['description'] ?? null;
        // Handle array of MembershipOfferDto objects
        if (isset($data['membershipOffers']) && is_array($data['membershipOffers'])) {
            $this->membership_offers = array_map(function($item) {
                return is_array($item) ? new MembershipOfferDto($item) : $item;
            }, $data['membershipOffers']);
        } else {
            $this->membership_offers = $data['membershipOffers'] ?? null;
        }
        $this->trial_period = $data['trialPeriod'] ?? null;
        $this->total_cycles = $data['totalCycles'] ?? null;
        $this->setup_fee = $data['setupFee'] ?? null;
        $this->variant_option_ids = $data['variantOptionIds'] ?? null;
        $this->compare_at_price = $data['compareAtPrice'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->user_id = $data['userId'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->track_inventory = $data['trackInventory'] ?? null;
        $this->available_quantity = $data['availableQuantity'] ?? null;
        $this->allow_out_of_stock_purchases = $data['allowOutOfStockPurchases'] ?? null;
        $this->sku = $data['sku'] ?? null;
        $this->shipping_options = $data['shippingOptions'] ?? null;
        $this->is_digital_product = $data['isDigitalProduct'] ?? null;
        $this->digital_delivery = $data['digitalDelivery'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->membership_offers !== null) {
            $result['membershipOffers'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->membership_offers);
        }
        if ($this->trial_period !== null) {
            $result['trialPeriod'] = $this->trial_period;
        }
        if ($this->total_cycles !== null) {
            $result['totalCycles'] = $this->total_cycles;
        }
        if ($this->setup_fee !== null) {
            $result['setupFee'] = $this->setup_fee;
        }
        if ($this->variant_option_ids !== null) {
            $result['variantOptionIds'] = $this->variant_option_ids;
        }
        if ($this->compare_at_price !== null) {
            $result['compareAtPrice'] = $this->compare_at_price;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
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
        if ($this->sku !== null) {
            $result['sku'] = $this->sku;
        }
        if ($this->shipping_options !== null) {
            $result['shippingOptions'] = $this->shipping_options;
        }
        if ($this->is_digital_product !== null) {
            $result['isDigitalProduct'] = $this->is_digital_product;
        }
        if ($this->digital_delivery !== null) {
            $result['digitalDelivery'] = $this->digital_delivery;
        }
        return $result;
    }
}
