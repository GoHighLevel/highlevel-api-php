<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAdContentDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
        if ($this->media_type !== null) {
            $result['mediaType'] = $this->media_type;
        }
        if ($this->headlines !== null) {
            $result['headlines'] = $this->headlines;
        }
        if ($this->long_headlines !== null) {
            $result['longHeadlines'] = $this->long_headlines;
        }
        if ($this->descriptions !== null) {
            $result['descriptions'] = $this->descriptions;
        }
        if ($this->final_url !== null) {
            $result['finalUrl'] = $this->final_url;
        }
        if ($this->path1 !== null) {
            $result['path1'] = $this->path1;
        }
        if ($this->path2 !== null) {
            $result['path2'] = $this->path2;
        }
        if ($this->is_deleted !== null) {
            $result['isDeleted'] = $this->is_deleted;
        }
        if ($this->ad_error !== null) {
            $result['adError'] = $this->ad_error;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->ad_id !== null) {
            $result['adId'] = $this->ad_id;
        }
        if ($this->ad_campaign_id !== null) {
            $result['adCampaignId'] = $this->ad_campaign_id;
        }
        if ($this->ad_group_id !== null) {
            $result['adGroupId'] = $this->ad_group_id;
        }
        if ($this->google_ad_id !== null) {
            $result['googleAdId'] = $this->google_ad_id;
        }
        if ($this->media !== null) {
            $result['media'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->media);
        }
        if ($this->call_to_action_label !== null) {
            $result['callToActionLabel'] = $this->call_to_action_label;
        }
        if ($this->business_name !== null) {
            $result['businessName'] = $this->business_name;
        }
        if ($this->youtube_video_links !== null) {
            $result['youtubeVideoLinks'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->youtube_video_links);
        }
        if ($this->carousel_cards !== null) {
            $result['carouselCards'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->carousel_cards);
        }
        if ($this->placements !== null) {
            $result['placements'] = $this->placements;
        }
        if ($this->custom_channels !== null) {
            $result['customChannels'] = $this->custom_channels;
        }
        return $result;
    }
}
