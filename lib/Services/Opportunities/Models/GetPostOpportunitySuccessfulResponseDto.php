<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * GetPostOpportunitySuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class GetPostOpportunitySuccessfulResponseDto
{
    /**
     * @var mixed
     */
    public $opportunity;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->opportunity = $data['opportunity'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->opportunity !== null) {
            $result['opportunity'] = $this->opportunity;
        }
        return $result;
    }
}
