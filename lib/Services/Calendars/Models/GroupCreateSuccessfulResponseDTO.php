<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * GroupCreateSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GroupCreateSuccessfulResponseDTO
{
    /**
     * @var GroupDTO|null
     */
    public ?GroupDTO $group = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single GroupDTO object
        if (isset($data['group']) && is_array($data['group'])) {
            $this->group = new GroupDTO($data['group']);
        } else {
            $this->group = $data['group'] ?? null;
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
        if ($this->group !== null) {
            $result['group'] = is_object($this->group) && method_exists($this->group, 'toArray') 
                ? $this->group->toArray() 
                : $this->group;
        }
        return $result;
    }
}
