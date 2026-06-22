<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * Budget model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class Budget
{
    /**
     * @var string
     */
    public string $budget_type;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string|null
     */
    public ?string $schedule_start_date = null;

    /**
     * @var string|null
     */
    public ?string $schedule_end_date = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->budget_type = $data['budgetType'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->schedule_start_date = $data['scheduleStartDate'] ?? null;
        $this->schedule_end_date = $data['scheduleEndDate'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->budget_type !== null) {
            $result['budgetType'] = $this->budget_type;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->schedule_start_date !== null) {
            $result['scheduleStartDate'] = $this->schedule_start_date;
        }
        if ($this->schedule_end_date !== null) {
            $result['scheduleEndDate'] = $this->schedule_end_date;
        }
        return $result;
    }
}
