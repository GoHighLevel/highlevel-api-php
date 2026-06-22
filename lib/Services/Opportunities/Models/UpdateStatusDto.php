<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * UpdateStatusDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class UpdateStatusDto
{
    /**
     * @var string
     */
    public string $status;

    /**
     * @var string|null
     */
    public ?string $lost_reason_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? '';
        $this->lost_reason_id = $data['lostReasonId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->lost_reason_id !== null) {
            $result['lostReasonId'] = $this->lost_reason_id;
        }
        return $result;
    }
}
