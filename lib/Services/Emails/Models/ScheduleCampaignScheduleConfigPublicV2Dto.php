<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignScheduleConfigPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignScheduleConfigPublicV2Dto
{
    /**
     * @var string|null
     */
    public ?string $send_at = null;

    /**
     * @var mixed
     */
    public $batch;

    /**
     * @var mixed
     */
    public $tracking;

    /**
     * @var mixed
     */
    public $resend;

    /**
     * @var string|null
     */
    public ?string $email_preference_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->send_at = $data['sendAt'] ?? null;
        $this->batch = $data['batch'] ?? null;
        $this->tracking = $data['tracking'] ?? null;
        $this->resend = $data['resend'] ?? null;
        $this->email_preference_id = $data['emailPreferenceId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->send_at !== null) {
            $result['sendAt'] = $this->send_at;
        }
        if ($this->batch !== null) {
            $result['batch'] = $this->batch;
        }
        if ($this->tracking !== null) {
            $result['tracking'] = $this->tracking;
        }
        if ($this->resend !== null) {
            $result['resend'] = $this->resend;
        }
        if ($this->email_preference_id !== null) {
            $result['emailPreferenceId'] = $this->email_preference_id;
        }
        return $result;
    }
}
