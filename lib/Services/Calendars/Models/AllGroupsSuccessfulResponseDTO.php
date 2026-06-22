<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * AllGroupsSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class AllGroupsSuccessfulResponseDTO
{
    /**
     * @var array&lt;GroupDTO&gt;|null
     */
    public ?array $groups = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GroupDTO objects
        if (isset($data['groups']) && is_array($data['groups'])) {
            $this->groups = array_map(function($item) {
                return is_array($item) ? new GroupDTO($item) : $item;
            }, $data['groups']);
        } else {
            $this->groups = $data['groups'] ?? null;
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
        if ($this->groups !== null) {
            $result['groups'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->groups);
        }
        return $result;
    }
}
