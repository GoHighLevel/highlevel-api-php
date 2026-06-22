<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * LocationConfigurationResponse model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class LocationConfigurationResponse
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
     * @var string|null
     */
    public ?string $meeting_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->kind = $data['kind'] ?? '';
        $this->location = $data['location'] ?? null;
        $this->meeting_id = $data['meetingId'] ?? null;
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
        if ($this->meeting_id !== null) {
            $result['meetingId'] = $this->meeting_id;
        }
        return $result;
    }
}
