<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceAddOnDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceAddOnDTO
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
     * @var float|null
     */
    public ?float $duration = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->quantity = $data['quantity'] ?? null;
        $this->duration = $data['duration'] ?? null;
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
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        return $result;
    }
}
