<?php

namespace HighLevel\Services\Locations\Models;

/**
 * GetLocationByIdSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetLocationByIdSuccessfulResponseDto
{
    /**
     * @var GetLocationByIdSchema|null
     */
    public ?GetLocationByIdSchema $location = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single GetLocationByIdSchema object
        if (isset($data['location']) && is_array($data['location'])) {
            $this->location = new GetLocationByIdSchema($data['location']);
        } else {
            $this->location = $data['location'] ?? null;
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
        if ($this->location !== null) {
            $result['location'] = is_object($this->location) && method_exists($this->location, 'toArray') 
                ? $this->location->toArray() 
                : $this->location;
        }
        return $result;
    }
}
