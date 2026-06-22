<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * TiktokProfileSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class TiktokProfileSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $username = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var bool|null
     */
    public ?bool $verified = null;

    /**
     * @var bool|null
     */
    public ?bool $is_connected = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->username = $data['username'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->verified = $data['verified'] ?? null;
        $this->is_connected = $data['isConnected'] ?? null;
        $this->type = $data['type'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->verified !== null) {
            $result['verified'] = $this->verified;
        }
        if ($this->is_connected !== null) {
            $result['isConnected'] = $this->is_connected;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
