<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetGroupSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetGroupSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var array&lt;string&gt;
     */
    public array $account_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->account_ids = $data['accountIds'] ?? [];
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
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        return $result;
    }
}
