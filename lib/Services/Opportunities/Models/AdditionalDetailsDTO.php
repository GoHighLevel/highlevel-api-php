<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * AdditionalDetailsDTO model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class AdditionalDetailsDTO
{
    /**
     * @var bool
     */
    public bool $notes;

    /**
     * @var bool
     */
    public bool $tasks;

    /**
     * @var bool
     */
    public bool $calendar_events;

    /**
     * @var bool
     */
    public bool $un_read_conversations;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->notes = $data['notes'] ?? false;
        $this->tasks = $data['tasks'] ?? false;
        $this->calendar_events = $data['calendarEvents'] ?? false;
        $this->un_read_conversations = $data['unReadConversations'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->tasks !== null) {
            $result['tasks'] = $this->tasks;
        }
        if ($this->calendar_events !== null) {
            $result['calendarEvents'] = $this->calendar_events;
        }
        if ($this->un_read_conversations !== null) {
            $result['unReadConversations'] = $this->un_read_conversations;
        }
        return $result;
    }
}
