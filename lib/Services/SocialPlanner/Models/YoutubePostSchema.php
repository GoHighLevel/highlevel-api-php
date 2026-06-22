<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * YoutubePostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class YoutubePostSchema
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $privacy_level = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? null;
        $this->privacy_level = $data['privacyLevel'] ?? null;
        $this->type = $data['type'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->privacy_level !== null) {
            $result['privacyLevel'] = $this->privacy_level;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
