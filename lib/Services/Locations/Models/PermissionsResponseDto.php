<?php

namespace HighLevel\Services\Locations\Models;

/**
 * PermissionsResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class PermissionsResponseDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $permissions;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->permissions = $data['permissions'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->permissions !== null) {
            $result['permissions'] = $this->permissions;
        }
        return $result;
    }
}
