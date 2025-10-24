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
    public mixed $recurring;

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
    public mixed $meta;

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
    public mixed $shipping_options;

    /**
     * @var bool|null
     */
    public ?bool $is_digital_product = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $digital_delivery = null;

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
