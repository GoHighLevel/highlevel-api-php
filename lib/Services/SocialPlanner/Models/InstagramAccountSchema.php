<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * InstagramAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class InstagramAccountSchema
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
    public ?string $avatar = null;

    /**
     * @var string|null
     */
    public ?string $page_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_connected = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->page_id = $data['pageId'] ?? null;
        $this->is_connected = $data['isConnected'] ?? null;
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
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->page_id !== null) {
            $result['pageId'] = $this->page_id;
        }
        if ($this->is_connected !== null) {
            $result['isConnected'] = $this->is_connected;
        }
        return $result;
    }
}
