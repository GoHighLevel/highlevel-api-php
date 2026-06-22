<?php

namespace HighLevel\Services\Businesses\Models;

/**
 * GetBusinessByLocationResponseDto model
 * 
 * @package HighLevel\Services\Businesses\Models
 */
class GetBusinessByLocationResponseDto
{
    /**
     * @var array&lt;BusinessDto&gt;
     */
    public array $businesses;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BusinessDto objects
        if (isset($data['businesses']) && is_array($data['businesses'])) {
            $this->businesses = array_map(function($item) {
                return is_array($item) ? new BusinessDto($item) : $item;
            }, $data['businesses']);
        } else {
            $this->businesses = $data['businesses'] ?? [];
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
        if ($this->businesses !== null) {
            $result['businesses'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->businesses);
        }
        return $result;
    }
}
