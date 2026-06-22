<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * Recurring model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class Recurring
{
    /**
     * @var string|null
     */
    public ?string $freq = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var string|null
     */
    public ?string $booking_option = null;

    /**
     * @var string|null
     */
    public ?string $booking_overlap_default_status = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->freq = $data['freq'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->booking_option = $data['bookingOption'] ?? null;
        $this->booking_overlap_default_status = $data['bookingOverlapDefaultStatus'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->freq !== null) {
            $result['freq'] = $this->freq;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->booking_option !== null) {
            $result['bookingOption'] = $this->booking_option;
        }
        if ($this->booking_overlap_default_status !== null) {
            $result['bookingOverlapDefaultStatus'] = $this->booking_overlap_default_status;
        }
        return $result;
    }
}
