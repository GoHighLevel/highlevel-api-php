<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CSVMediaResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->aspect_ratio !== null) {
            $result['aspectRatio'] = $this->aspect_ratio;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->video_codec_name !== null) {
            $result['videoCodecName'] = $this->video_codec_name;
        }
        if ($this->frame_rate !== null) {
            $result['frameRate'] = $this->frame_rate;
        }
        if ($this->audio_codec_name !== null) {
            $result['audioCodecName'] = $this->audio_codec_name;
        }
        if ($this->audio_channels !== null) {
            $result['audioChannels'] = $this->audio_channels;
        }
        if ($this->display_aspect_ratio !== null) {
            $result['displayAspectRatio'] = $this->display_aspect_ratio;
        }
        if ($this->frames !== null) {
            $result['frames'] = $this->frames;
        }
        if ($this->selected_poster !== null) {
            $result['selectedPoster'] = $this->selected_poster;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->instagram_error !== null) {
            $result['instagramError'] = $this->instagram_error;
        }
        if ($this->gmb_error !== null) {
            $result['gmbError'] = $this->gmb_error;
        }
        if ($this->facebook_error !== null) {
            $result['facebookError'] = $this->facebook_error;
        }
        if ($this->linkedin_error !== null) {
            $result['linkedinError'] = $this->linkedin_error;
        }
        if ($this->twitter_error !== null) {
            $result['twitterError'] = $this->twitter_error;
        }
        if ($this->tiktok_error !== null) {
            $result['tiktokError'] = $this->tiktok_error;
        }
        if ($this->tiktok_business_error !== null) {
            $result['tiktokBusinessError'] = $this->tiktok_business_error;
        }
        if ($this->invalid_error !== null) {
            $result['invalidError'] = $this->invalid_error;
        }
        return $result;
    }
}
