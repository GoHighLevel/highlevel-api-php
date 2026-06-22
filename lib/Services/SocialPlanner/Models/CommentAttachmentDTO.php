<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentAttachmentDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentAttachmentDTO
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $thumbnail = null;

    /**
     * @var string|null
     */
    public ?string $video_url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->thumbnail = $data['thumbnail'] ?? null;
        $this->video_url = $data['videoUrl'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        if ($this->video_url !== null) {
            $result['videoUrl'] = $this->video_url;
        }
        return $result;
    }
}
