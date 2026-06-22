<?php

namespace HighLevel\Services\Saas\Models;

/**
 * AttachedRebillingProductConfigDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class AttachedRebillingProductConfigDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var float
     */
    public float $markup;

    /**
     * @var float|null
     */
    public ?float $price = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->markup = $data['markup'] ?? 0;
        $this->price = $data['price'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->markup !== null) {
            $result['markup'] = $this->markup;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        return $result;
    }
}
