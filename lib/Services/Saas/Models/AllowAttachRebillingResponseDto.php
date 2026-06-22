<?php

namespace HighLevel\Services\Saas\Models;

/**
 * AllowAttachRebillingResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class AllowAttachRebillingResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $attached_rebilling_config;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->location_id = $data['locationId'] ?? '';
        $this->attached_rebilling_config = $data['attachedRebillingConfig'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->attached_rebilling_config !== null) {
            $result['attachedRebillingConfig'] = $this->attached_rebilling_config;
        }
        return $result;
    }
}
