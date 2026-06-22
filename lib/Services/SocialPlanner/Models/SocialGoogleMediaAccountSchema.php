<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SocialGoogleMediaAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SocialGoogleMediaAccountSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $o_auth_id = null;

    /**
     * @var string|null
     */
    public ?string $old_id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $platform = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $type = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var bool|null
     */
    public ?bool $active = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? null;
        $this->o_auth_id = $data['oAuthId'] ?? null;
        $this->old_id = $data['oldId'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->origin_id = $data['originId'] ?? null;
        $this->platform = $data['platform'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->active = $data['active'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->o_auth_id !== null) {
            $result['oAuthId'] = $this->o_auth_id;
        }
        if ($this->old_id !== null) {
            $result['oldId'] = $this->old_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
