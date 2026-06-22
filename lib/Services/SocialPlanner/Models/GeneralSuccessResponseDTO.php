<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GeneralSuccessResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GeneralSuccessResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;UpdatedSlotInfoDTO&gt;|null
     */
    public ?array $updated_slots = null;

    /**
     * @var float|null
     */
    public ?float $total_posts_changed = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        // Handle array of UpdatedSlotInfoDTO objects
        if (isset($data['updatedSlots']) && is_array($data['updatedSlots'])) {
            $this->updated_slots = array_map(function($item) {
                return is_array($item) ? new UpdatedSlotInfoDTO($item) : $item;
            }, $data['updatedSlots']);
        } else {
            $this->updated_slots = $data['updatedSlots'] ?? null;
        }
        $this->total_posts_changed = $data['totalPostsChanged'] ?? null;
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
        if ($this->updated_slots !== null) {
            $result['updatedSlots'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->updated_slots);
        }
        if ($this->total_posts_changed !== null) {
            $result['totalPostsChanged'] = $this->total_posts_changed;
        }
        return $result;
    }
}
