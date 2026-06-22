<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachYoutubeAccountResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachYoutubeAccountResponseDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $origin_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $avatar;

    /**
     * @var bool|null
     */
    public ?bool $verified = null;

    /**
     * @var string|null
     */
    public ?string $username = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->origin_id = $data['originId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->avatar = $data['avatar'] ?? '';
        $this->verified = $data['verified'] ?? null;
        $this->username = $data['username'] ?? null;
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
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->verified !== null) {
            $result['verified'] = $this->verified;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        return $result;
    }
}
