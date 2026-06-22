<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * ProcessingFeePaidChargeDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ProcessingFeePaidChargeDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var float
     */
    public float $charge;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->charge = $data['charge'] ?? 0;
        $this->amount = $data['amount'] ?? 0;
        $this->id = $data['_id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->charge !== null) {
            $result['charge'] = $this->charge;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        return $result;
    }
}
