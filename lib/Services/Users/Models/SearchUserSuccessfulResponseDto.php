<?php

namespace HighLevel\Services\Users\Models;

/**
 * SearchUserSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class SearchUserSuccessfulResponseDto
{
    /**
     * @var array&lt;UserSchema&gt;|null
     */
    public ?array $users = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of UserSchema objects
        if (isset($data['users']) && is_array($data['users'])) {
            $this->users = array_map(function($item) {
                return is_array($item) ? new UserSchema($item) : $item;
            }, $data['users']);
        } else {
            $this->users = $data['users'] ?? null;
        }
        $this->count = $data['count'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->users !== null) {
            $result['users'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->users);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
