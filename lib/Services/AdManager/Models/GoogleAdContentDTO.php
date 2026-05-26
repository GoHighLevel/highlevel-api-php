<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleAdContentDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleAdContentDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $media_type = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $headlines = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $long_headlines = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $descriptions = null;

    /**
     * @var string|null
     */
    public ?string $final_url = null;

    /**
     * @var string|null
     */
    public ?string $path1 = null;

    /**
     * @var string|null
     */
    public ?string $path2 = null;

    /**
     * @var bool|null
     */
    public ?bool $is_deleted = null;

    /**
     * @var string|null
     */
    public ?string $ad_error = null;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $ad_id = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_id = null;

    /**
     * @var string|null
     */
    public ?string $ad_group_id = null;

    /**
     * @var string|null
     */
    public ?string $google_ad_id = null;

    /**
     * @var array&lt;GoogleMediaDTO&gt;|null
     */
    public ?array $media = null;

    /**
     * @var string|null
     */
    public ?string $call_to_action_label = null;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var array&lt;GoogleYouTubeVideoLinkDTO&gt;|null
     */
    public ?array $youtube_video_links = null;

    /**
     * @var array&lt;GoogleCarouselCardDTO&gt;|null
     */
    public ?array $carousel_cards = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $placements = null;

    /**
     * @var bool|null
     */
    public ?bool $custom_channels = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->media_type = $data['mediaType'] ?? null;
        $this->headlines = $data['headlines'] ?? null;
        $this->long_headlines = $data['longHeadlines'] ?? null;
        $this->descriptions = $data['descriptions'] ?? null;
        $this->final_url = $data['finalUrl'] ?? null;
        $this->path1 = $data['path1'] ?? null;
        $this->path2 = $data['path2'] ?? null;
        $this->is_deleted = $data['isDeleted'] ?? null;
        $this->ad_error = $data['adError'] ?? null;
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->ad_id = $data['adId'] ?? null;
        $this->ad_campaign_id = $data['adCampaignId'] ?? null;
        $this->ad_group_id = $data['adGroupId'] ?? null;
        $this->google_ad_id = $data['googleAdId'] ?? null;
        // Handle array of GoogleMediaDTO objects
        if (isset($data['media']) && is_array($data['media'])) {
            $this->media = array_map(function($item) {
                return is_array($item) ? new GoogleMediaDTO($item) : $item;
            }, $data['media']);
        } else {
            $this->media = $data['media'] ?? null;
        }
        $this->call_to_action_label = $data['callToActionLabel'] ?? null;
        $this->business_name = $data['businessName'] ?? null;
        // Handle array of GoogleYouTubeVideoLinkDTO objects
        if (isset($data['youtubeVideoLinks']) && is_array($data['youtubeVideoLinks'])) {
            $this->youtube_video_links = array_map(function($item) {
                return is_array($item) ? new GoogleYouTubeVideoLinkDTO($item) : $item;
            }, $data['youtubeVideoLinks']);
        } else {
            $this->youtube_video_links = $data['youtubeVideoLinks'] ?? null;
        }
        // Handle array of GoogleCarouselCardDTO objects
        if (isset($data['carouselCards']) && is_array($data['carouselCards'])) {
            $this->carousel_cards = array_map(function($item) {
                return is_array($item) ? new GoogleCarouselCardDTO($item) : $item;
            }, $data['carouselCards']);
        } else {
            $this->carousel_cards = $data['carouselCards'] ?? null;
        }
        $this->placements = $data['placements'] ?? null;
        $this->custom_channels = $data['customChannels'] ?? null;
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
