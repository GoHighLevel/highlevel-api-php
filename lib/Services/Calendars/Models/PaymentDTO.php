<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * PaymentDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class PaymentDTO
{
    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var float|null
     */
    public ?float $deposit = null;

    /**
     * @var string|null
     */
    public ?string $deposit_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->amount = $data['amount'] ?? null;
        $this->deposit = $data['deposit'] ?? null;
        $this->deposit_type = $data['depositType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->deposit !== null) {
            $result['deposit'] = $this->deposit;
        }
        if ($this->deposit_type !== null) {
            $result['depositType'] = $this->deposit_type;
        }
        return $result;
    }
}
