<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleBiddingStrategyDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleBiddingStrategyDTO
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var float|null
     */
    public ?float $value = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->value = $data['value'] ?? null;
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
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
