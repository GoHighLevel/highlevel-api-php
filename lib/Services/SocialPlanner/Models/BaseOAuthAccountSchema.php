<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * BaseOAuthAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class BaseOAuthAccountSchema
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $origin_id;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->origin_id = $data['originId'] ?? '';
        $this->avatar = $data['avatar'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        return $result;
    }
}
