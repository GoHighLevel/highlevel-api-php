<?php

namespace HighLevel\Services\Payments\Models;

/**
 * DeleteCouponResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class DeleteCouponResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

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
        $this->success = $data['success'] ?? false;
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
