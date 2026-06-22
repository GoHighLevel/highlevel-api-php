<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignTrackingPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignTrackingPublicV2Dto
{
    /**
     * @var bool|null
     */
    public ?bool $click_tracking = null;

    /**
     * @var bool|null
     */
    public ?bool $utm_tracking = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->click_tracking = $data['clickTracking'] ?? null;
        $this->utm_tracking = $data['utmTracking'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->click_tracking !== null) {
            $result['clickTracking'] = $this->click_tracking;
        }
        if ($this->utm_tracking !== null) {
            $result['utmTracking'] = $this->utm_tracking;
        }
        return $result;
    }
}
