<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * StartAfterArrayNumberSchema model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class StartAfterArrayNumberSchema
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $start_after_date = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->start_after_date = $data['startAfterDate'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->start_after_date !== null) {
            $result['startAfterDate'] = $this->start_after_date;
        }
        return $result;
    }
}
