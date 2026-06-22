<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CustomRRuleOptionsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CustomRRuleOptionsDto
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
    public ?string $start_time = null;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

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
    public ?float $num_of_week = null;

    /**
     * @var string|null
     */
    public ?string $month_of_year = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var float|null
     */
    public ?float $days_before = null;

    /**
     * @var bool|null
     */
    public ?bool $use_start_as_primary_user_accepted = null;

    /**
     * @var string|null
     */
    public ?string $end_type = null;

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
        $this->start_time = $data['startTime'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->day_of_month = $data['dayOfMonth'] ?? null;
        $this->day_of_week = $data['dayOfWeek'] ?? null;
        $this->num_of_week = $data['numOfWeek'] ?? null;
        $this->month_of_year = $data['monthOfYear'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->days_before = $data['daysBefore'] ?? null;
        $this->use_start_as_primary_user_accepted = $data['useStartAsPrimaryUserAccepted'] ?? null;
        $this->end_type = $data['endType'] ?? null;
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
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->day_of_month !== null) {
            $result['dayOfMonth'] = $this->day_of_month;
        }
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->num_of_week !== null) {
            $result['numOfWeek'] = $this->num_of_week;
        }
        if ($this->month_of_year !== null) {
            $result['monthOfYear'] = $this->month_of_year;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->days_before !== null) {
            $result['daysBefore'] = $this->days_before;
        }
        if ($this->use_start_as_primary_user_accepted !== null) {
            $result['useStartAsPrimaryUserAccepted'] = $this->use_start_as_primary_user_accepted;
        }
        if ($this->end_type !== null) {
            $result['endType'] = $this->end_type;
        }
        return $result;
    }
}
