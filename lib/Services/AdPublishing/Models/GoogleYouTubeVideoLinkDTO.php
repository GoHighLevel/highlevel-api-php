<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleYouTubeVideoLinkDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleYouTubeVideoLinkDTO
{
    /**
     * @var string
     */
    public string $youtube_video_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->youtube_video_id = $data['youtubeVideoId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->youtube_video_id !== null) {
            $result['youtubeVideoId'] = $this->youtube_video_id;
        }
        return $result;
    }
}
