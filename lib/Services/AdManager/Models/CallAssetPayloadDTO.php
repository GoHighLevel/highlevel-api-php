<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * CallAssetPayloadDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class CallAssetPayloadDTO
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string
     */
    public string $country_code;

    /**
     * @var string|null
     */
    public ?string $call_conversion_action = null;

    /**
     * @var array&lt;AdScheduleTargetDTO&gt;|null
     */
    public ?array $ad_schedule_targets = null;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

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
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->country_code = $data['countryCode'] ?? '';
        $this->call_conversion_action = $data['callConversionAction'] ?? null;
        // Handle array of AdScheduleTargetDTO objects
        if (isset($data['adScheduleTargets']) && is_array($data['adScheduleTargets'])) {
            $this->ad_schedule_targets = array_map(function($item) {
                return is_array($item) ? new AdScheduleTargetDTO($item) : $item;
            }, $data['adScheduleTargets']);
        } else {
            $this->ad_schedule_targets = $data['adScheduleTargets'] ?? null;
        }
        $this->resource_name = $data['resourceName'] ?? null;
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
