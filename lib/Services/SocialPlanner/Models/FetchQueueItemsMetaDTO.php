<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchQueueItemsMetaDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchQueueItemsMetaDTO
{
    /**
     * @var string|null
     */
    public ?string $count = null;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        return $result;
    }
}
