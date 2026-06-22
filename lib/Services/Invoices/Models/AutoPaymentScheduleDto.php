<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * AutoPaymentScheduleDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class AutoPaymentScheduleDto
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
     * @var string
     */
    public string $id;

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
        $this->id = $data['id'] ?? '';
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->auto_payment !== null) {
            $result['autoPayment'] = $this->auto_payment;
        }
        return $result;
    }
}
