<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * QueueModifiedPostDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class QueueModifiedPostDTO
{
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
    public ?string $schedule_date = null;

    /**
     * @var string|null
     */
    public ?string $selected_best_time = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var string|null
     */
    public ?string $follow_up_comment = null;

    /**
     * @var mixed
     */
    public $og_tags_details;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $type = null;

    /**
     * @var mixed
     */
    public $post_approval_details;

    /**
     * @var bool|null
     */
    public ?bool $schedule_time_updated = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string|null
     */
    public ?string $category_id = null;

    /**
     * @var bool|null
     */
    public ?bool $apply_watermark = null;

    /**
     * @var mixed
     */
    public $tiktok_post_details;

    /**
     * @var mixed
     */
    public $gmb_post_details;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

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
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
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
        $this->schedule_date = $data['scheduleDate'] ?? null;
        $this->selected_best_time = $data['selectedBestTime'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->follow_up_comment = $data['followUpComment'] ?? null;
        $this->og_tags_details = $data['ogTagsDetails'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->post_approval_details = $data['postApprovalDetails'] ?? null;
        $this->schedule_time_updated = $data['scheduleTimeUpdated'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->category_id = $data['categoryId'] ?? null;
        $this->apply_watermark = $data['applyWatermark'] ?? null;
        $this->tiktok_post_details = $data['tiktokPostDetails'] ?? null;
        $this->gmb_post_details = $data['gmbPostDetails'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->linkedin_post_details = $data['linkedinPostDetails'] ?? null;
        $this->pinterest_post_details = $data['pinterestPostDetails'] ?? null;
        $this->facebook_post_details = $data['facebookPostDetails'] ?? null;
        $this->instagram_post_details = $data['instagramPostDetails'] ?? null;
        $this->youtube_post_details = $data['youtubePostDetails'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        if ($this->schedule_date !== null) {
            $result['scheduleDate'] = $this->schedule_date;
        }
        if ($this->selected_best_time !== null) {
            $result['selectedBestTime'] = $this->selected_best_time;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->follow_up_comment !== null) {
            $result['followUpComment'] = $this->follow_up_comment;
        }
        if ($this->og_tags_details !== null) {
            $result['ogTagsDetails'] = $this->og_tags_details;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->post_approval_details !== null) {
            $result['postApprovalDetails'] = $this->post_approval_details;
        }
        if ($this->schedule_time_updated !== null) {
            $result['scheduleTimeUpdated'] = $this->schedule_time_updated;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->category_id !== null) {
            $result['categoryId'] = $this->category_id;
        }
        if ($this->apply_watermark !== null) {
            $result['applyWatermark'] = $this->apply_watermark;
        }
        if ($this->tiktok_post_details !== null) {
            $result['tiktokPostDetails'] = $this->tiktok_post_details;
        }
        if ($this->gmb_post_details !== null) {
            $result['gmbPostDetails'] = $this->gmb_post_details;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
