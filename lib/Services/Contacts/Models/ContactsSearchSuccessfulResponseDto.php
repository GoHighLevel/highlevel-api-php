<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * ContactsSearchSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class ContactsSearchSuccessfulResponseDto
{
    /**
     * @var array&lt;ContactsSearchSchema&gt;|null
     */
    public ?array $contacts = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ContactsSearchSchema objects
        if (isset($data['contacts']) && is_array($data['contacts'])) {
            $this->contacts = array_map(function($item) {
                return is_array($item) ? new ContactsSearchSchema($item) : $item;
            }, $data['contacts']);
        } else {
            $this->contacts = $data['contacts'] ?? null;
        }
        $this->count = $data['count'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->contacts !== null) {
            $result['contacts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->contacts);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
