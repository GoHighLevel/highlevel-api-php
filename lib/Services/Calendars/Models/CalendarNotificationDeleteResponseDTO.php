<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarNotificationDeleteResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarNotificationDeleteResponseDTO
{
    /**
     * @var string
     */
    public string $message;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? '';
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
        return $result;
    }
}
