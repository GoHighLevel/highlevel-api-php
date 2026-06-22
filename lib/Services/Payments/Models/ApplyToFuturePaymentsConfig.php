<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * ApplyToFuturePaymentsConfig model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ApplyToFuturePaymentsConfig
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $duration;

    /**
     * @var string
     */
    public string $duration_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->duration = $data['duration'] ?? 0;
        $this->duration_type = $data['durationType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->duration_type !== null) {
            $result['durationType'] = $this->duration_type;
        }
        return $result;
    }
}
