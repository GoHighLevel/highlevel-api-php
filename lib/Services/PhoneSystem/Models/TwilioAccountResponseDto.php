<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * TwilioAccountResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class TwilioAccountResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $account_sid;

    /**
     * @var bool
     */
    public bool $under_ghl_account;

    /**
     * @var bool
     */
    public bool $validate_sms;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $migration_status = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $migration_numbers = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $assigned_to_numbers = null;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $numbers;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $number_name = null;

    /**
     * @var string|null
     */
    public ?string $new_account_sid = null;

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
        $this->id = $data['id'] ?? '';
        $this->account_sid = $data['account_sid'] ?? '';
        $this->under_ghl_account = $data['under_ghl_account'] ?? false;
        $this->validate_sms = $data['validate_sms'] ?? false;
        $this->location_id = $data['location_id'] ?? '';
        $this->migration_status = $data['migration_status'] ?? null;
        $this->migration_numbers = $data['migration_numbers'] ?? null;
        $this->assigned_to_numbers = $data['assigned_to_numbers'] ?? null;
        $this->numbers = $data['numbers'] ?? null;
        $this->number_name = $data['number_name'] ?? null;
        $this->new_account_sid = $data['new_account_sid'] ?? null;
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
