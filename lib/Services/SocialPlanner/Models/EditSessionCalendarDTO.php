<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * EditSessionCalendarDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class EditSessionCalendarDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $session_id;

    /**
     * @var string
     */
    public string $start_date;

    /**
     * @var string
     */
    public string $end_date;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? '';
        $this->start_date = $data['startDate'] ?? '';
        $this->end_date = $data['endDate'] ?? '';
        $this->account_ids = $data['accountIds'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->session_id !== null) {
            $result['sessionId'] = $this->session_id;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        return $result;
    }
}
