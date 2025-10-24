<?php

namespace HighLevel\Services\Store\Models;

/**
 * GetAvailableShippingRates model
 * 
 * @package HighLevel\Services\Store\Models
 */
class GetAvailableShippingRates
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $country;

    /**
     * @var mixed
     */
    public mixed $address;

    /**
     * @var string|null
     */
    public ?string $amount_available = null;

    /**
     * @var float
     */
    public float $total_order_amount;

    /**
     * @var bool|null
     */
    public ?bool $weight_available = null;

    /**
     * @var float
     */
    public float $total_order_weight;

    /**
     * @var mixed
     */
    public mixed $source;

    /**
     * @var array&lt;ProductItem&gt;
     */
    public array $products;

    /**
     * @var string|null
     */
    public ?string $coupon_code = null;

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
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->address = $data['address'] ?? null;
        $this->amount_available = $data['amountAvailable'] ?? null;
        $this->total_order_amount = $data['totalOrderAmount'] ?? 0;
        $this->weight_available = $data['weightAvailable'] ?? null;
        $this->total_order_weight = $data['totalOrderWeight'] ?? 0;
        $this->source = $data['source'] ?? null;
        // Handle array of ProductItem objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new ProductItem($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
        }
        $this->coupon_code = $data['couponCode'] ?? null;
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
