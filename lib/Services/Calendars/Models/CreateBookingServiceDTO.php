<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateBookingServiceDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateBookingServiceDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $staff_id = null;

    /**
     * @var float|null
     */
    public ?float $position = null;

    /**
     * @var array&lt;ServiceAddOnDTO&gt;|null
     */
    public ?array $add_ons = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->staff_id = $data['staffId'] ?? null;
        $this->position = $data['position'] ?? null;
        // Handle array of ServiceAddOnDTO objects
        if (isset($data['addOns']) && is_array($data['addOns'])) {
            $this->add_ons = array_map(function($item) {
                return is_array($item) ? new ServiceAddOnDTO($item) : $item;
            }, $data['addOns']);
        } else {
            $this->add_ons = $data['addOns'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->staff_id !== null) {
            $result['staffId'] = $this->staff_id;
        }
        if ($this->position !== null) {
            $result['position'] = $this->position;
        }
        if ($this->add_ons !== null) {
            $result['addOns'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->add_ons);
        }
        return $result;
    }
}
