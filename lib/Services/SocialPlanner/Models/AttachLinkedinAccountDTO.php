<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachLinkedinAccountDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachLinkedinAccountDTO
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
     * @var string
     */
    public string $urn;

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
        $this->urn = $data['urn'] ?? '';
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
        if ($this->urn !== null) {
            $result['urn'] = $this->urn;
        }
        return $result;
    }
}
