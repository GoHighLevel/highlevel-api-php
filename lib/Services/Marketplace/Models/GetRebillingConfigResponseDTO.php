<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * GetRebillingConfigResponseDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class GetRebillingConfigResponseDTO
{
    /**
     * @var mixed
     */
    public $plans;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->plans = $data['plans'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->plans !== null) {
            $result['plans'] = $this->plans;
        }
        return $result;
    }
}
