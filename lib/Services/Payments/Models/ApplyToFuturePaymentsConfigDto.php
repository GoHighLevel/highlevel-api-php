<?php

namespace HighLevel\Services\Payments\Models;

/**
 * ApplyToFuturePaymentsConfigDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ApplyToFuturePaymentsConfigDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var float|null
     */
    public ?float $duration = null;

    /**
     * @var string|null
     */
    public ?string $duration_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->duration = $data['duration'] ?? null;
        $this->duration_type = $data['durationType'] ?? null;
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
