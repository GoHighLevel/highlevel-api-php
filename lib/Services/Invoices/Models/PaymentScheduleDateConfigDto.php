<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * PaymentScheduleDateConfigDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class PaymentScheduleDateConfigDto
{
    /**
     * @var string
     */
    public string $deposit_date_type;

    /**
     * @var string
     */
    public string $schedule_date_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->deposit_date_type = $data['depositDateType'] ?? '';
        $this->schedule_date_type = $data['scheduleDateType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->deposit_date_type !== null) {
            $result['depositDateType'] = $this->deposit_date_type;
        }
        if ($this->schedule_date_type !== null) {
            $result['scheduleDateType'] = $this->schedule_date_type;
        }
        return $result;
    }
}
