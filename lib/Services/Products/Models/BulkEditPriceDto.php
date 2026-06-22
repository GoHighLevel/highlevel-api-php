<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * BulkEditPriceDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkEditPriceDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $compare_at_price = null;

    /**
     * @var float|null
     */
    public ?float $available_quantity = null;

    /**
     * @var bool|null
     */
    public ?bool $track_inventory = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_out_of_stock_purchases = null;

    /**
     * @var string|null
     */
    public ?string $sku = null;

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
     * @var mixed
     */
    public $shipping_options;

    /**
     * @var mixed
     */
    public $recurring;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->compare_at_price = $data['compareAtPrice'] ?? null;
        $this->available_quantity = $data['availableQuantity'] ?? null;
        $this->track_inventory = $data['trackInventory'] ?? null;
        $this->allow_out_of_stock_purchases = $data['allowOutOfStockPurchases'] ?? null;
        $this->sku = $data['sku'] ?? null;
        $this->trial_period = $data['trialPeriod'] ?? null;
        $this->total_cycles = $data['totalCycles'] ?? null;
        $this->setup_fee = $data['setupFee'] ?? null;
        $this->shipping_options = $data['shippingOptions'] ?? null;
        $this->recurring = $data['recurring'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->compare_at_price !== null) {
            $result['compareAtPrice'] = $this->compare_at_price;
        }
        if ($this->available_quantity !== null) {
            $result['availableQuantity'] = $this->available_quantity;
        }
        if ($this->track_inventory !== null) {
            $result['trackInventory'] = $this->track_inventory;
        }
        if ($this->allow_out_of_stock_purchases !== null) {
            $result['allowOutOfStockPurchases'] = $this->allow_out_of_stock_purchases;
        }
        if ($this->sku !== null) {
            $result['sku'] = $this->sku;
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
        if ($this->shipping_options !== null) {
            $result['shippingOptions'] = $this->shipping_options;
        }
        if ($this->recurring !== null) {
            $result['recurring'] = $this->recurring;
        }
        return $result;
    }
}
