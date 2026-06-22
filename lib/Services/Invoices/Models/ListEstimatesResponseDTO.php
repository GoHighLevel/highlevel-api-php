<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * ListEstimatesResponseDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ListEstimatesResponseDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $estimates;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $trace_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->estimates = $data['estimates'] ?? [];
        $this->total = $data['total'] ?? 0;
        $this->trace_id = $data['traceId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->estimates !== null) {
            $result['estimates'] = $this->estimates;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
