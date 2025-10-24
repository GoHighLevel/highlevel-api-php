<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ProcessingFeeDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ProcessingFeeDto
{
    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $charges;

    /**
     * @var float|null
     */
    public ?float $collected_miscellaneous_charges = null;

    /**
     * @var array&lt;ProcessingFeePaidChargeDto&gt;|null
     */
    public ?array $paid_charges = null;

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
        $this->charges = $data['charges'] ?? [];
        $this->collected_miscellaneous_charges = $data['collectedMiscellaneousCharges'] ?? null;
        // Handle array of ProcessingFeePaidChargeDto objects
        if (isset($data['paidCharges']) && is_array($data['paidCharges'])) {
            $this->paid_charges = array_map(function($item) {
                return is_array($item) ? new ProcessingFeePaidChargeDto($item) : $item;
            }, $data['paidCharges']);
        } else {
            $this->paid_charges = $data['paidCharges'] ?? null;
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
