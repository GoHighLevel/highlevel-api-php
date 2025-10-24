<?php

namespace HighLevel\Services\Store\Models;

/**
 * CreateShippingRateDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class CreateShippingRateDto
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
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string
     */
    public string $condition_type;

    /**
     * @var float
     */
    public float $min_condition;

    /**
     * @var float
     */
    public float $max_condition;

    /**
     * @var bool|null
     */
    public ?bool $is_carrier_rate = null;

    /**
     * @var string
     */
    public string $shipping_carrier_id;

    /**
     * @var float|null
     */
    public ?float $percentage_of_rate_fee = null;

    /**
     * @var array&lt;ShippingCarrierServiceDto&gt;|null
     */
    public ?array $shipping_carrier_services = null;

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
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->condition_type = $data['conditionType'] ?? '';
        $this->min_condition = $data['minCondition'] ?? 0;
        $this->max_condition = $data['maxCondition'] ?? 0;
        $this->is_carrier_rate = $data['isCarrierRate'] ?? null;
        $this->shipping_carrier_id = $data['shippingCarrierId'] ?? '';
        $this->percentage_of_rate_fee = $data['percentageOfRateFee'] ?? null;
        // Handle array of ShippingCarrierServiceDto objects
        if (isset($data['shippingCarrierServices']) && is_array($data['shippingCarrierServices'])) {
            $this->shipping_carrier_services = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierServiceDto($item) : $item;
            }, $data['shippingCarrierServices']);
        } else {
            $this->shipping_carrier_services = $data['shippingCarrierServices'] ?? null;
        }
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
