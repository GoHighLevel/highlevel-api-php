<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UpdatedSlotInfoDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UpdatedSlotInfoDTO
{
    /**
     * @var string|null
     */
    public ?string $item_id = null;

    /**
     * @var string|null
     */
    public ?string $scheduled_date_time = null;

    /**
     * @var bool|null
     */
    public ?bool $is_skipped = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->item_id = $data['itemId'] ?? null;
        $this->scheduled_date_time = $data['scheduledDateTime'] ?? null;
        $this->is_skipped = $data['isSkipped'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->item_id !== null) {
            $result['itemId'] = $this->item_id;
        }
        if ($this->scheduled_date_time !== null) {
            $result['scheduledDateTime'] = $this->scheduled_date_time;
        }
        if ($this->is_skipped !== null) {
            $result['isSkipped'] = $this->is_skipped;
        }
        return $result;
    }
}
