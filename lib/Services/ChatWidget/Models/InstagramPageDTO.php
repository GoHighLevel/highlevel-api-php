<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * InstagramPageDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class InstagramPageDTO
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
     * @var string|null
     */
    public ?string $instagram_page_id = null;

    /**
     * @var string|null
     */
    public ?string $instagram_username = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->facebook_page_id = $data['facebookPageId'] ?? null;
        $this->facebook_page_name = $data['facebookPageName'] ?? null;
        $this->instagram_page_id = $data['instagramPageId'] ?? null;
        $this->instagram_username = $data['instagramUsername'] ?? null;
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
        if ($this->instagram_page_id !== null) {
            $result['instagramPageId'] = $this->instagram_page_id;
        }
        if ($this->instagram_username !== null) {
            $result['instagramUsername'] = $this->instagram_username;
        }
        return $result;
    }
}
