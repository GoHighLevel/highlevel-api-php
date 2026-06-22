<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * LocationConfiguration model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class LocationConfiguration
{
    /**
     * @var string
     */
    public string $kind;

    /**
     * @var string|null
     */
    public ?string $location = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->kind = $data['kind'] ?? '';
        $this->location = $data['location'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->kind !== null) {
            $result['kind'] = $this->kind;
        }
        if ($this->location !== null) {
            $result['location'] = $this->location;
        }
        return $result;
    }
}
