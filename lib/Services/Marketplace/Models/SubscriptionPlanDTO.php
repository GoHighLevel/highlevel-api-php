<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * SubscriptionPlanDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class SubscriptionPlanDTO
{
    /**
     * @var float
     */
    public float $reselling_amount;

    /**
     * @var float
     */
    public float $base_amount;

    /**
     * @var string
     */
    public string $plan_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $features;

    /**
     * @var string
     */
    public string $payment_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $payment_time;

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
        $this->reselling_amount = $data['resellingAmount'] ?? 0;
        $this->base_amount = $data['baseAmount'] ?? 0;
        $this->plan_id = $data['planId'] ?? '';
        $this->features = $data['features'] ?? [];
        $this->payment_type = $data['paymentType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->payment_time = $data['paymentTime'] ?? '';
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
