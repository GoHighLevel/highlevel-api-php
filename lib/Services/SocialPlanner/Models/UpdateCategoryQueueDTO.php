<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UpdateCategoryQueueDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UpdateCategoryQueueDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool|null
     */
    public ?bool $skip_legacy_watermark = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $status = null;

    /**
     * @var string|null
     */
    public ?string $skip_date_time = null;

    /**
     * @var array&lt;TimeSlotDTO&gt;|null
     */
    public ?array $time_slots = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_future_posts = null;

    /**
     * @var bool|null
     */
    public ?bool $prioritize_new_content = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->skip_legacy_watermark = $data['skipLegacyWatermark'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->skip_date_time = $data['skipDateTime'] ?? null;
        // Handle array of TimeSlotDTO objects
        if (isset($data['timeSlots']) && is_array($data['timeSlots'])) {
            $this->time_slots = array_map(function($item) {
                return is_array($item) ? new TimeSlotDTO($item) : $item;
            }, $data['timeSlots']);
        } else {
            $this->time_slots = $data['timeSlots'] ?? null;
        }
        $this->enable_future_posts = $data['enableFuturePosts'] ?? null;
        $this->prioritize_new_content = $data['prioritizeNewContent'] ?? null;
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
        if ($this->skip_legacy_watermark !== null) {
            $result['skipLegacyWatermark'] = $this->skip_legacy_watermark;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->skip_date_time !== null) {
            $result['skipDateTime'] = $this->skip_date_time;
        }
        if ($this->time_slots !== null) {
            $result['timeSlots'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->time_slots);
        }
        if ($this->enable_future_posts !== null) {
            $result['enableFuturePosts'] = $this->enable_future_posts;
        }
        if ($this->prioritize_new_content !== null) {
            $result['prioritizeNewContent'] = $this->prioritize_new_content;
        }
        return $result;
    }
}
