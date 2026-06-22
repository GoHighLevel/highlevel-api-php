<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchSlotsResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchSlotsResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;UpdatedSlotInfoDTO&gt;|null
     */
    public ?array $slots = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        // Handle array of UpdatedSlotInfoDTO objects
        if (isset($data['slots']) && is_array($data['slots'])) {
            $this->slots = array_map(function($item) {
                return is_array($item) ? new UpdatedSlotInfoDTO($item) : $item;
            }, $data['slots']);
        } else {
            $this->slots = $data['slots'] ?? null;
        }
        $this->total = $data['total'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->slots !== null) {
            $result['slots'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->slots);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        return $result;
    }
}
