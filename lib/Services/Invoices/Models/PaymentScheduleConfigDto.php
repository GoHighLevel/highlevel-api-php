<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * PaymentScheduleConfigDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class PaymentScheduleConfigDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var mixed
     */
    public $date_config;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $schedules;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->date_config = $data['dateConfig'] ?? null;
        $this->schedules = $data['schedules'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->date_config !== null) {
            $result['dateConfig'] = $this->date_config;
        }
        if ($this->schedules !== null) {
            $result['schedules'] = $this->schedules;
        }
        return $result;
    }
}
