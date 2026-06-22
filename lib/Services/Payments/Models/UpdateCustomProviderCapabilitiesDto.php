<?php

namespace HighLevel\Services\Payments\Models;

/**
 * UpdateCustomProviderCapabilitiesDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class UpdateCustomProviderCapabilitiesDto
{
    /**
     * @var bool
     */
    public bool $supports_subscription_schedules;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->supports_subscription_schedules = $data['supportsSubscriptionSchedules'] ?? false;
        $this->company_id = $data['companyId'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->supports_subscription_schedules !== null) {
            $result['supportsSubscriptionSchedules'] = $this->supports_subscription_schedules;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
