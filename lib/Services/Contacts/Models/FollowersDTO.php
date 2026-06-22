<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * FollowersDTO model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class FollowersDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $followers;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->followers = $data['followers'] ?? [];
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
        return $result;
    }
}
