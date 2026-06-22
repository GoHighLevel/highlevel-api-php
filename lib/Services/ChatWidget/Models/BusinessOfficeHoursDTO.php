<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * BusinessOfficeHoursDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class BusinessOfficeHoursDTO
{
    /**
     * @var bool|null
     */
    public ?bool $enable_business_hours = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $open_hours = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var string|null
     */
    public ?string $outside_office_hours_welcome_msg = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable_business_hours = $data['enableBusinessHours'] ?? null;
        $this->open_hours = $data['openHours'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->outside_office_hours_welcome_msg = $data['outsideOfficeHoursWelcomeMsg'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable_business_hours !== null) {
            $result['enableBusinessHours'] = $this->enable_business_hours;
        }
        if ($this->open_hours !== null) {
            $result['openHours'] = $this->open_hours;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->outside_office_hours_welcome_msg !== null) {
            $result['outsideOfficeHoursWelcomeMsg'] = $this->outside_office_hours_welcome_msg;
        }
        return $result;
    }
}
