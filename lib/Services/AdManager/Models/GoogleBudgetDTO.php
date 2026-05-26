<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleBudgetDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleBudgetDTO
{
    /**
     * @var string|null
     */
    public ?string $budget_type = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var string|null
     */
    public ?string $schedule_start_date = null;

    /**
     * @var string|null
     */
    public ?string $schedule_end_date = null;

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
        $this->budget_type = $data['budgetType'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->schedule_start_date = $data['scheduleStartDate'] ?? null;
        $this->schedule_end_date = $data['scheduleEndDate'] ?? null;
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
