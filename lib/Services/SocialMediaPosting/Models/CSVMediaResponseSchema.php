<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * CSVMediaResponseSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class CSVMediaResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var float|null
     */
    public ?float $size = null;

    /**
     * @var float|null
     */
    public ?float $width = null;

    /**
     * @var float|null
     */
    public ?float $height = null;

    /**
     * @var float|null
     */
    public ?float $aspect_ratio = null;

    /**
     * @var float|null
     */
    public ?float $duration = null;

    /**
     * @var string|null
     */
    public ?string $format = null;

    /**
     * @var string|null
     */
    public ?string $video_codec_name = null;

    /**
     * @var float|null
     */
    public ?float $frame_rate = null;

    /**
     * @var string|null
     */
    public ?string $audio_codec_name = null;

    /**
     * @var float|null
     */
    public ?float $audio_channels = null;

    /**
     * @var string|null
     */
    public ?string $display_aspect_ratio = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $frames = null;

    /**
     * @var float|null
     */
    public ?float $selected_poster = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

    /**
     * @var string|null
     */
    public ?string $instagram_error = null;

    /**
     * @var string|null
     */
    public ?string $gmb_error = null;

    /**
     * @var string|null
     */
    public ?string $facebook_error = null;

    /**
     * @var string|null
     */
    public ?string $linkedin_error = null;

    /**
     * @var string|null
     */
    public ?string $twitter_error = null;

    /**
     * @var string|null
     */
    public ?string $tiktok_error = null;

    /**
     * @var string|null
     */
    public ?string $tiktok_business_error = null;

    /**
     * @var string|null
     */
    public ?string $invalid_error = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->size = $data['size'] ?? null;
        $this->width = $data['width'] ?? null;
        $this->height = $data['height'] ?? null;
        $this->aspect_ratio = $data['aspectRatio'] ?? null;
        $this->duration = $data['duration'] ?? null;
        $this->format = $data['format'] ?? null;
        $this->video_codec_name = $data['videoCodecName'] ?? null;
        $this->frame_rate = $data['frameRate'] ?? null;
        $this->audio_codec_name = $data['audioCodecName'] ?? null;
        $this->audio_channels = $data['audioChannels'] ?? null;
        $this->display_aspect_ratio = $data['displayAspectRatio'] ?? null;
        $this->frames = $data['frames'] ?? null;
        $this->selected_poster = $data['selectedPoster'] ?? null;
        $this->error = $data['error'] ?? null;
        $this->instagram_error = $data['instagramError'] ?? null;
        $this->gmb_error = $data['gmbError'] ?? null;
        $this->facebook_error = $data['facebookError'] ?? null;
        $this->linkedin_error = $data['linkedinError'] ?? null;
        $this->twitter_error = $data['twitterError'] ?? null;
        $this->tiktok_error = $data['tiktokError'] ?? null;
        $this->tiktok_business_error = $data['tiktokBusinessError'] ?? null;
        $this->invalid_error = $data['invalidError'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
