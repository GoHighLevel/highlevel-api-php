<?php

namespace HighLevel\Services\Saas\Models;

/**
 * ComplimentaryCreditDTO model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class ComplimentaryCreditDTO
{
    /**
     * @var float|null
     */
    public ?float $complimentary_credits_amount = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->complimentary_credits_amount = $data['complimentaryCreditsAmount'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->complimentary_credits_amount !== null) {
            $result['complimentaryCreditsAmount'] = $this->complimentary_credits_amount;
        }
        return $result;
    }
}
