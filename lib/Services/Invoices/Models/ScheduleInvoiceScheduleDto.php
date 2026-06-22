<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ScheduleInvoiceScheduleDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ScheduleInvoiceScheduleDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var mixed
     */
    public $auto_payment;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->auto_payment = $data['autoPayment'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->auto_payment !== null) {
            $result['autoPayment'] = $this->auto_payment;
        }
        return $result;
    }
}
