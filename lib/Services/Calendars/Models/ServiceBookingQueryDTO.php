<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceBookingQueryDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceBookingQueryDTO
{
    /**
     * @var bool|null
     */
    public ?bool $override_availability = null;

    /**
     * @var bool|null
     */
    public ?bool $skip_scheduling_notice = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->override_availability = $data['overrideAvailability'] ?? null;
        $this->skip_scheduling_notice = $data['skipSchedulingNotice'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->override_availability !== null) {
            $result['overrideAvailability'] = $this->override_availability;
        }
        if ($this->skip_scheduling_notice !== null) {
            $result['skipSchedulingNotice'] = $this->skip_scheduling_notice;
        }
        return $result;
    }
}
