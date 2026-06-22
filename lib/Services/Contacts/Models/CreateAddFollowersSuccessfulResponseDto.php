<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateAddFollowersSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateAddFollowersSuccessfulResponseDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers_added = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->followers = $data['followers'] ?? null;
        $this->followers_added = $data['followersAdded'] ?? null;
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
        if ($this->followers_added !== null) {
            $result['followersAdded'] = $this->followers_added;
        }
        return $result;
    }
}
