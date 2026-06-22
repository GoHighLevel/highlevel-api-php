<?php

namespace HighLevel\Services\Forms\Models;

/**
 * ContactSessionIds model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class ContactSessionIds
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $ids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->ids = $data['ids'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        return $result;
    }
}
