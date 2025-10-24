<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * InvoiceItemDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class InvoiceItemDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $product_id = null;

    /**
     * @var string|null
     */
    public ?string $price_id = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var float
     */
    public float $qty;

    /**
     * @var array&lt;ItemTaxDto&gt;|null
     */
    public ?array $taxes = null;

    /**
     * @var string|null
     */
    public ?string $automatic_tax_category_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_setup_fee_item = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var bool|null
     */
    public ?bool $tax_inclusive = null;

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
        $this->description = $data['description'] ?? null;
        $this->product_id = $data['productId'] ?? null;
        $this->price_id = $data['priceId'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->qty = $data['qty'] ?? 0;
        // Handle array of ItemTaxDto objects
        if (isset($data['taxes']) && is_array($data['taxes'])) {
            $this->taxes = array_map(function($item) {
                return is_array($item) ? new ItemTaxDto($item) : $item;
            }, $data['taxes']);
        } else {
            $this->taxes = $data['taxes'] ?? null;
        }
        $this->automatic_tax_category_id = $data['automaticTaxCategoryId'] ?? null;
        $this->is_setup_fee_item = $data['isSetupFeeItem'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->tax_inclusive = $data['taxInclusive'] ?? null;
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
