<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * RaiseChargeBodyDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class RaiseChargeBodyDTO
{
    /**
     * @var string
     */
    public string $app_id;

    /**
     * @var string
     */
    public string $meter_id;

    /**
     * @var string
     */
    public string $event_id;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var float|null
     */
    public ?float $price = null;

    /**
     * @var float
     */
    public float $units;

    /**
     * @var string|null
     */
    public ?string $event_time = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->app_id = $data['appId'] ?? '';
        $this->meter_id = $data['meterId'] ?? '';
        $this->event_id = $data['eventId'] ?? '';
        $this->user_id = $data['userId'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->company_id = $data['companyId'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->price = $data['price'] ?? null;
        $this->units = $data['units'] ?? 0;
        $this->event_time = $data['eventTime'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->app_id !== null) {
            $result['appId'] = $this->app_id;
        }
        if ($this->meter_id !== null) {
            $result['meterId'] = $this->meter_id;
        }
        if ($this->event_id !== null) {
            $result['eventId'] = $this->event_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->units !== null) {
            $result['units'] = $this->units;
        }
        if ($this->event_time !== null) {
            $result['eventTime'] = $this->event_time;
        }
        return $result;
    }
}
