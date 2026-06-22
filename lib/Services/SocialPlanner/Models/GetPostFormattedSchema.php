<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetPostFormattedSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetPostFormattedSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $platform = null;

    /**
     * @var string|null
     */
    public ?string $thumbnail = null;

    /**
     * @var string|null
     */
    public ?string $display_date = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $account_id = null;

    /**
     * @var string
     */
    public string $error;

    /**
     * @var string|null
     */
    public ?string $post_id = null;

    /**
     * @var string|null
     */
    public ?string $published_at = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * @var array&lt;PostMediaSchema&gt;|null
     */
    public ?array $media = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $status = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var mixed
     */
    public $og_tags_details;

    /**
     * @var mixed
     */
    public $post_approval_details;

    /**
     * @var mixed
     */
    public $tiktok_post_details;

    /**
     * @var mixed
     */
    public $gmb_post_details;

    /**
     * @var mixed
     */
    public $bluesky_post_details;

    /**
     * @var mixed
     */
    public $user;

    /**
     * @var mixed
     */
    public $linkedin_post_details;

    /**
     * @var mixed
     */
    public $pinterest_post_details;

    /**
     * @var mixed
     */
    public $facebook_post_details;

    /**
     * @var mixed
     */
    public $instagram_post_details;

    /**
     * @var mixed
     */
    public $youtube_post_details;

    /**
     * @var bool|null
     */
    public ?bool $media_optimization = null;

    /**
     * @var mixed
     */
    public $insights;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->platform = $data['platform'] ?? null;
        $this->thumbnail = $data['thumbnail'] ?? null;
        $this->display_date = $data['displayDate'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->account_id = $data['accountId'] ?? null;
        $this->error = $data['error'] ?? '';
        $this->post_id = $data['postId'] ?? null;
        $this->published_at = $data['publishedAt'] ?? null;
        $this->account_ids = $data['accountIds'] ?? null;
        $this->summary = $data['summary'] ?? null;
        // Handle array of PostMediaSchema objects
        if (isset($data['media']) && is_array($data['media'])) {
            $this->media = array_map(function($item) {
                return is_array($item) ? new PostMediaSchema($item) : $item;
            }, $data['media']);
        } else {
            $this->media = $data['media'] ?? null;
        }
        $this->status = $data['status'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->og_tags_details = $data['ogTagsDetails'] ?? null;
        $this->post_approval_details = $data['postApprovalDetails'] ?? null;
        $this->tiktok_post_details = $data['tiktokPostDetails'] ?? null;
        $this->gmb_post_details = $data['gmbPostDetails'] ?? null;
        $this->bluesky_post_details = $data['blueskyPostDetails'] ?? null;
        $this->user = $data['user'] ?? null;
        $this->linkedin_post_details = $data['linkedinPostDetails'] ?? null;
        $this->pinterest_post_details = $data['pinterestPostDetails'] ?? null;
        $this->facebook_post_details = $data['facebookPostDetails'] ?? null;
        $this->instagram_post_details = $data['instagramPostDetails'] ?? null;
        $this->youtube_post_details = $data['youtubePostDetails'] ?? null;
        $this->media_optimization = $data['mediaOptimization'] ?? null;
        $this->insights = $data['insights'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        if ($this->display_date !== null) {
            $result['displayDate'] = $this->display_date;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->account_id !== null) {
            $result['accountId'] = $this->account_id;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->post_id !== null) {
            $result['postId'] = $this->post_id;
        }
        if ($this->published_at !== null) {
            $result['publishedAt'] = $this->published_at;
        }
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        if ($this->summary !== null) {
            $result['summary'] = $this->summary;
        }
        if ($this->media !== null) {
            $result['media'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->media);
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->og_tags_details !== null) {
            $result['ogTagsDetails'] = $this->og_tags_details;
        }
        if ($this->post_approval_details !== null) {
            $result['postApprovalDetails'] = $this->post_approval_details;
        }
        if ($this->tiktok_post_details !== null) {
            $result['tiktokPostDetails'] = $this->tiktok_post_details;
        }
        if ($this->gmb_post_details !== null) {
            $result['gmbPostDetails'] = $this->gmb_post_details;
        }
        if ($this->bluesky_post_details !== null) {
            $result['blueskyPostDetails'] = $this->bluesky_post_details;
        }
        if ($this->user !== null) {
            $result['user'] = $this->user;
        }
        if ($this->linkedin_post_details !== null) {
            $result['linkedinPostDetails'] = $this->linkedin_post_details;
        }
        if ($this->pinterest_post_details !== null) {
            $result['pinterestPostDetails'] = $this->pinterest_post_details;
        }
        if ($this->facebook_post_details !== null) {
            $result['facebookPostDetails'] = $this->facebook_post_details;
        }
        if ($this->instagram_post_details !== null) {
            $result['instagramPostDetails'] = $this->instagram_post_details;
        }
        if ($this->youtube_post_details !== null) {
            $result['youtubePostDetails'] = $this->youtube_post_details;
        }
        if ($this->media_optimization !== null) {
            $result['mediaOptimization'] = $this->media_optimization;
        }
        if ($this->insights !== null) {
            $result['insights'] = $this->insights;
        }
        return $result;
    }
}
