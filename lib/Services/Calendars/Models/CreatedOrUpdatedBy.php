<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreatedOrUpdatedBy model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreatedOrUpdatedBy
{
    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $source;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->user_id = $data['userId'] ?? null;
        $this->source = $data['source'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }
}
