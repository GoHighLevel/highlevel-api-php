<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachIGAccountDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachIGAccountDTO
{
    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var string
     */
    public string $page_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->origin_id = $data['originId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->page_id = $data['pageId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
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
        return $result;
    }
}
