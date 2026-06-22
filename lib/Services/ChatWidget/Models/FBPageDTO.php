<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * FBPageDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class FBPageDTO
{
    /**
     * @var string|null
     */
    public ?string $facebook_page_id = null;

    /**
     * @var string|null
     */
    public ?string $facebook_page_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->facebook_page_id = $data['facebookPageId'] ?? null;
        $this->facebook_page_name = $data['facebookPageName'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->facebook_page_id !== null) {
            $result['facebookPageId'] = $this->facebook_page_id;
        }
        if ($this->facebook_page_name !== null) {
            $result['facebookPageName'] = $this->facebook_page_name;
        }
        return $result;
    }
}
