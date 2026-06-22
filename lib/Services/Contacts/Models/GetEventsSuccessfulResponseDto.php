<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * GetEventsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetEventsSuccessfulResponseDto
{
    /**
     * @var array&lt;GetEventSchema&gt;|null
     */
    public ?array $events = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetEventSchema objects
        if (isset($data['events']) && is_array($data['events'])) {
            $this->events = array_map(function($item) {
                return is_array($item) ? new GetEventSchema($item) : $item;
            }, $data['events']);
        } else {
            $this->events = $data['events'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->events !== null) {
            $result['events'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->events);
        }
        return $result;
    }
}
