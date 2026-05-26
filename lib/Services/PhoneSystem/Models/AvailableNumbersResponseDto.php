<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * AvailableNumbersResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class AvailableNumbersResponseDto
{
    /**
     * @var string
     */
    public string $fingerprint_id;

    /**
     * @var array&lt;AvailablePhoneNumberDto&gt;
     */
    public array $numbers;

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
        $this->fingerprint_id = $data['fingerprintId'] ?? '';
        // Handle array of AvailablePhoneNumberDto objects
        if (isset($data['numbers']) && is_array($data['numbers'])) {
            $this->numbers = array_map(function($item) {
                return is_array($item) ? new AvailablePhoneNumberDto($item) : $item;
            }, $data['numbers']);
        } else {
            $this->numbers = $data['numbers'] ?? [];
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
