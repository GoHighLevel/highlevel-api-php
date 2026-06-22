<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomRRulesOptions model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomRRulesOptions
{
    /**
     * @var string
     */
    public string $interval_type;

    /**
     * @var float
     */
    public float $interval;

    /**
     * @var string
     */
    public string $start_date;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var float|null
     */
    public ?float $day_of_month = null;

    /**
     * @var string|null
     */
    public ?string $day_of_week = null;

    /**
     * @var float|null
     */
    public ?float $month_of_year = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var bool|null
     */
    public ?bool $create_task_if_over_due = null;

    /**
     * @var float
     */
    public float $due_after_seconds;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->interval_type = $data['intervalType'] ?? '';
        $this->interval = $data['interval'] ?? 0;
        $this->start_date = $data['startDate'] ?? '';
        $this->end_date = $data['endDate'] ?? null;
        $this->day_of_month = $data['dayOfMonth'] ?? null;
        $this->day_of_week = $data['dayOfWeek'] ?? null;
        $this->month_of_year = $data['monthOfYear'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->create_task_if_over_due = $data['createTaskIfOverDue'] ?? null;
        $this->due_after_seconds = $data['dueAfterSeconds'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->interval_type !== null) {
            $result['intervalType'] = $this->interval_type;
        }
        if ($this->interval !== null) {
            $result['interval'] = $this->interval;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->day_of_month !== null) {
            $result['dayOfMonth'] = $this->day_of_month;
        }
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->month_of_year !== null) {
            $result['monthOfYear'] = $this->month_of_year;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->create_task_if_over_due !== null) {
            $result['createTaskIfOverDue'] = $this->create_task_if_over_due;
        }
        if ($this->due_after_seconds !== null) {
            $result['dueAfterSeconds'] = $this->due_after_seconds;
        }
        return $result;
    }
}
