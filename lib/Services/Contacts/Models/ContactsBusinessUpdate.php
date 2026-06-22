<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * ContactsBusinessUpdate model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class ContactsBusinessUpdate
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $ids;

    /**
     * @var string
     */
    public string $business_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->ids = $data['ids'] ?? [];
        $this->business_id = $data['businessId'] ?? '';
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
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->business_id !== null) {
            $result['businessId'] = $this->business_id;
        }
        return $result;
    }
}
