<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FollowupSettings model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FollowupSettings
{
    /**
     * @var bool
     */
    public bool $dynamic_channel_switching;

    /**
     * @var bool|null
     */
    public ?bool $follow_up_hours = null;

    /**
     * @var array&lt;WorkingHours&gt;|null
     */
    public ?array $working_hours = null;

    /**
     * @var string|null
     */
    public ?string $timezone_to_use = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->dynamic_channel_switching = $data['dynamicChannelSwitching'] ?? false;
        $this->follow_up_hours = $data['followUpHours'] ?? null;
        // Handle array of WorkingHours objects
        if (isset($data['workingHours']) && is_array($data['workingHours'])) {
            $this->working_hours = array_map(function($item) {
                return is_array($item) ? new WorkingHours($item) : $item;
            }, $data['workingHours']);
        } else {
            $this->working_hours = $data['workingHours'] ?? null;
        }
        $this->timezone_to_use = $data['timezoneToUse'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->dynamic_channel_switching !== null) {
            $result['dynamicChannelSwitching'] = $this->dynamic_channel_switching;
        }
        if ($this->follow_up_hours !== null) {
            $result['followUpHours'] = $this->follow_up_hours;
        }
        if ($this->working_hours !== null) {
            $result['workingHours'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->working_hours);
        }
        if ($this->timezone_to_use !== null) {
            $result['timezoneToUse'] = $this->timezone_to_use;
        }
        return $result;
    }
}
