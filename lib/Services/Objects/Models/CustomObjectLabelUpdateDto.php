<?php

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectLabelUpdateDto model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectLabelUpdateDto
{
    /**
     * @var string|null
     */
    public ?string $singular = null;

    /**
     * @var string|null
     */
    public ?string $plural = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->singular = $data['singular'] ?? null;
        $this->plural = $data['plural'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->singular !== null) {
            $result['singular'] = $this->singular;
        }
        if ($this->plural !== null) {
            $result['plural'] = $this->plural;
        }
        return $result;
    }
}
