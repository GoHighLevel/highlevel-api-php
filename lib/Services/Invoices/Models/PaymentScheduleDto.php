<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * PaymentScheduleDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class PaymentScheduleDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;
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
        if ($this->schedules !== null) {
            $result['schedules'] = $this->schedules;
        }
        return $result;
    }
}
