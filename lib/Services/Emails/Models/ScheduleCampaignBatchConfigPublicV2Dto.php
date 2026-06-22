<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignBatchConfigPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignBatchConfigPublicV2Dto
{
    /**
     * @var float
     */
    public float $batch_size;

    /**
     * @var float
     */
    public float $interval;

    /**
     * @var string
     */
    public string $interval_unit;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $skip_days = null;

    /**
     * @var string|null
     */
    public ?string $window_start = null;

    /**
     * @var string|null
     */
    public ?string $window_end = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->batch_size = $data['batchSize'] ?? 0;
        $this->interval = $data['interval'] ?? 0;
        $this->interval_unit = $data['intervalUnit'] ?? '';
        $this->skip_days = $data['skipDays'] ?? null;
        $this->window_start = $data['windowStart'] ?? null;
        $this->window_end = $data['windowEnd'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->batch_size !== null) {
            $result['batchSize'] = $this->batch_size;
        }
        if ($this->interval !== null) {
            $result['interval'] = $this->interval;
        }
        if ($this->interval_unit !== null) {
            $result['intervalUnit'] = $this->interval_unit;
        }
        if ($this->skip_days !== null) {
            $result['skipDays'] = $this->skip_days;
        }
        if ($this->window_start !== null) {
            $result['windowStart'] = $this->window_start;
        }
        if ($this->window_end !== null) {
            $result['windowEnd'] = $this->window_end;
        }
        return $result;
    }
}
