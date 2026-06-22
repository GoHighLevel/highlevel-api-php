<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CalendarListDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CalendarListDTO
{
    /**
     * @var string
     */
    public string $location_id;

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
    public ?array $category_ids = null;

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
        $this->start_date = $data['startDate'] ?? '';
        $this->end_date = $data['endDate'] ?? '';
        $this->category_ids = $data['categoryIds'] ?? null;
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
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->category_ids !== null) {
            $result['categoryIds'] = $this->category_ids;
        }
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        return $result;
    }
}
