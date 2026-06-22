<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ListEstimateTemplateResponseDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ListEstimateTemplateResponseDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $data;

    /**
     * @var float
     */
    public float $total_count;

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
        $this->data = $data['data'] ?? [];
        $this->total_count = $data['totalCount'] ?? 0;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
