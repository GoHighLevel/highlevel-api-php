<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PostCreateRequest model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PostCreateRequest
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
     * @var array&lt;string, mixed&gt;
     */
    public array $type;

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
        $this->created_by = $data['createdBy'] ?? null;
        $this->follow_up_comment = $data['followUpComment'] ?? null;
        $this->og_tags_details = $data['ogTagsDetails'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->post_approval_details = $data['postApprovalDetails'] ?? null;
        $this->schedule_time_updated = $data['scheduleTimeUpdated'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->category_id = $data['categoryId'] ?? null;
        $this->tiktok_post_details = $data['tiktokPostDetails'] ?? null;
        $this->gmb_post_details = $data['gmbPostDetails'] ?? null;
        $this->user_id = $data['userId'] ?? null;
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
        if ($this->tiktok_post_details !== null) {
            $result['tiktokPostDetails'] = $this->tiktok_post_details;
        }
        if ($this->gmb_post_details !== null) {
            $result['gmbPostDetails'] = $this->gmb_post_details;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
