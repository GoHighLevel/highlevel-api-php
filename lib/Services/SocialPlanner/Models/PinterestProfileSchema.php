<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PinterestProfileSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PinterestProfileSchema
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
    public ?bool $is_connected = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $website_url = null;

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
        $this->is_connected = $data['isConnected'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->website_url = $data['websiteUrl'] ?? null;
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
        if ($this->is_connected !== null) {
            $result['isConnected'] = $this->is_connected;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->website_url !== null) {
            $result['websiteUrl'] = $this->website_url;
        }
        return $result;
    }
}
