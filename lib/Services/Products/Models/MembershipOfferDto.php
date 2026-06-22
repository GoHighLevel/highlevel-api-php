<?php

namespace HighLevel\Services\Products\Models;

/**
 * MembershipOfferDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class MembershipOfferDto
{
    /**
     * @var string
     */
    public string $label;

    /**
     * @var string
     */
    public string $value;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->label = $data['label'] ?? '';
        $this->value = $data['value'] ?? '';
        $this->id = $data['_id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        return $result;
    }
}
