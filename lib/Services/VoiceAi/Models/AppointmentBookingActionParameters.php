<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * AppointmentBookingActionParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class AppointmentBookingActionParameters
{
    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var float
     */
    public float $days_of_offering_dates;

    /**
     * @var float
     */
    public float $slots_per_day;

    /**
     * @var float
     */
    public float $hours_between_slots;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->days_of_offering_dates = $data['daysOfOfferingDates'] ?? 0;
        $this->slots_per_day = $data['slotsPerDay'] ?? 0;
        $this->hours_between_slots = $data['hoursBetweenSlots'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->days_of_offering_dates !== null) {
            $result['daysOfOfferingDates'] = $this->days_of_offering_dates;
        }
        if ($this->slots_per_day !== null) {
            $result['slotsPerDay'] = $this->slots_per_day;
        }
        if ($this->hours_between_slots !== null) {
            $result['hoursBetweenSlots'] = $this->hours_between_slots;
        }
        return $result;
    }
}
