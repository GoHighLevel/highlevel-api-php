<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignResendPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignResendPublicV2Dto
{
    /**
     * @var bool|null
     */
    public ?bool $enabled = null;

    /**
     * @var float|null
     */
    public ?float $wait_hours = null;

    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? null;
        $this->wait_hours = $data['waitHours'] ?? null;
        $this->subject = $data['subject'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->wait_hours !== null) {
            $result['waitHours'] = $this->wait_hours;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        return $result;
    }
}
