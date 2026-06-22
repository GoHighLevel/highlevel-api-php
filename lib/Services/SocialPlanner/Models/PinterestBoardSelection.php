<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PinterestBoardSelection model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PinterestBoardSelection
{
    /**
     * @var string
     */
    public string $account_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $boards;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->account_id = $data['accountId'] ?? '';
        $this->boards = $data['boards'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->account_id !== null) {
            $result['accountId'] = $this->account_id;
        }
        if ($this->boards !== null) {
            $result['boards'] = $this->boards;
        }
        return $result;
    }
}
