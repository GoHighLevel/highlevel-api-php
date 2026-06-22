<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchQueueItemsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchQueueItemsDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $session_id = null;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * @var bool|null
     */
    public ?bool $error_filter = null;

    /**
     * @var string|null
     */
    public ?string $item_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
        $this->error_filter = $data['errorFilter'] ?? null;
        $this->item_id = $data['itemId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->session_id !== null) {
            $result['sessionId'] = $this->session_id;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->error_filter !== null) {
            $result['errorFilter'] = $this->error_filter;
        }
        if ($this->item_id !== null) {
            $result['itemId'] = $this->item_id;
        }
        return $result;
    }
}
