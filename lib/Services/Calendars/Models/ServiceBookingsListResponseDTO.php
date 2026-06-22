<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceBookingsListResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceBookingsListResponseDTO
{
    /**
     * @var array&lt;ServiceBookingResponseDTO&gt;
     */
    public array $bookings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ServiceBookingResponseDTO objects
        if (isset($data['bookings']) && is_array($data['bookings'])) {
            $this->bookings = array_map(function($item) {
                return is_array($item) ? new ServiceBookingResponseDTO($item) : $item;
            }, $data['bookings']);
        } else {
            $this->bookings = $data['bookings'] ?? [];
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
        if ($this->bookings !== null) {
            $result['bookings'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->bookings);
        }
        return $result;
    }
}
