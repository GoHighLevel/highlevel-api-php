<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetAccountSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $oauth_id = null;

    /**
     * @var string|null
     */
    public ?string $profile_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $platform = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $expire = null;

    /**
     * @var bool|null
     */
    public ?bool $is_expired = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->oauth_id = $data['oauthId'] ?? null;
        $this->profile_id = $data['profileId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->platform = $data['platform'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->expire = $data['expire'] ?? null;
        $this->is_expired = $data['isExpired'] ?? null;
        $this->meta = $data['meta'] ?? null;
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
        if ($this->oauth_id !== null) {
            $result['oauthId'] = $this->oauth_id;
        }
        if ($this->profile_id !== null) {
            $result['profileId'] = $this->profile_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->expire !== null) {
            $result['expire'] = $this->expire;
        }
        if ($this->is_expired !== null) {
            $result['isExpired'] = $this->is_expired;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
