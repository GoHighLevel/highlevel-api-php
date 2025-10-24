<?php

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
    public mixed $shipping_options;

    /**
     * @var mixed
     */
    public mixed $recurring;

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
