<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * ProcessingFeeDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ProcessingFeeDto
{
    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $charges;

    /**
     * @var float|null
     */
    public ?float $collected_miscellaneous_charges = null;

    /**
     * @var array&lt;ProcessingFeePaidChargeDto&gt;|null
     */
    public ?array $paid_charges = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->charges = $data['charges'] ?? [];
        $this->collected_miscellaneous_charges = $data['collectedMiscellaneousCharges'] ?? null;
        // Handle array of ProcessingFeePaidChargeDto objects
        if (isset($data['paidCharges']) && is_array($data['paidCharges'])) {
            $this->paid_charges = array_map(function($item) {
                return is_array($item) ? new ProcessingFeePaidChargeDto($item) : $item;
            }, $data['paidCharges']);
        } else {
            $this->paid_charges = $data['paidCharges'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->charges !== null) {
            $result['charges'] = $this->charges;
        }
        if ($this->collected_miscellaneous_charges !== null) {
            $result['collectedMiscellaneousCharges'] = $this->collected_miscellaneous_charges;
        }
        if ($this->paid_charges !== null) {
            $result['paidCharges'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->paid_charges);
        }
        return $result;
    }
}
