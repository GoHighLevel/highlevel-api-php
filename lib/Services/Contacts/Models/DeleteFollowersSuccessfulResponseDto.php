<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * DeleteFollowersSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class DeleteFollowersSuccessfulResponseDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers_removed = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->followers = $data['followers'] ?? null;
        $this->followers_removed = $data['followersRemoved'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        if ($this->followers_removed !== null) {
            $result['followersRemoved'] = $this->followers_removed;
        }
        return $result;
    }
}
