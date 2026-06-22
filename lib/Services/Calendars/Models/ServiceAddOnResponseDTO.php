<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceAddOnResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceAddOnResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var float|null
     */
    public ?float $quantity = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->quantity = $data['quantity'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
        }
        return $result;
    }
}
