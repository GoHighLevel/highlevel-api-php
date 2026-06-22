<?php

namespace HighLevel\Services\Users\Models;

/**
 * RoleSchema model
 * 
 * @package HighLevel\Services\Users\Models
 */
class RoleSchema
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $role = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $location_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $restrict_sub_account = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->location_ids = $data['locationIds'] ?? null;
        $this->restrict_sub_account = $data['restrictSubAccount'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->location_ids !== null) {
            $result['locationIds'] = $this->location_ids;
        }
        if ($this->restrict_sub_account !== null) {
            $result['restrictSubAccount'] = $this->restrict_sub_account;
        }
        return $result;
    }
}
