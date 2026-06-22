<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceResponseWrapperDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceResponseWrapperDTO
{
    /**
     * @var mixed
     */
    public $service;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->service = $data['service'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->service !== null) {
            $result['service'] = $this->service;
        }
        return $result;
    }
}
