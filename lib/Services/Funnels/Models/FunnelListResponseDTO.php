<?php

namespace HighLevel\Services\Funnels\Models;

/**
 * FunnelListResponseDTO model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class FunnelListResponseDTO
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $funnels;

    /**
     * @var float
     */
    public float $count;

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
        $this->funnels = $data['funnels'] ?? null;
        $this->count = $data['count'] ?? 0;
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
        if ($this->funnels !== null) {
            $result['funnels'] = $this->funnels;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
