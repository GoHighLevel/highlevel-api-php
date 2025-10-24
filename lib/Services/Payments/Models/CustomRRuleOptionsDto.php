<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CustomRRuleOptionsDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CustomRRuleOptionsDto
{
    /**
     * @var string
     */
    public string $interval_type;

    /**
     * @var float
     */
    public float $interval;

    /**
     * @var string
     */
    public string $start_date;

    /**
     * @var string|null
     */
    public ?string $start_time = null;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

    /**
     * @var float|null
     */
    public ?float $day_of_month = null;

    /**
     * @var string|null
     */
    public ?string $day_of_week = null;

    /**
     * @var float|null
     */
    public ?float $num_of_week = null;

    /**
     * @var string|null
     */
    public ?string $month_of_year = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var float|null
     */
    public ?float $days_before = null;

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
        $this->interval_type = $data['intervalType'] ?? '';
        $this->interval = $data['interval'] ?? 0;
        $this->start_date = $data['startDate'] ?? '';
        $this->start_time = $data['startTime'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->day_of_month = $data['dayOfMonth'] ?? null;
        $this->day_of_week = $data['dayOfWeek'] ?? null;
        $this->num_of_week = $data['numOfWeek'] ?? null;
        $this->month_of_year = $data['monthOfYear'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->days_before = $data['daysBefore'] ?? null;
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
