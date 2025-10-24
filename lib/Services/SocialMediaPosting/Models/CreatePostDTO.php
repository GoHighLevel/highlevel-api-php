<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * CreatePostDTO model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class CreatePostDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $account_ids;

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
    public mixed $og_tags_details;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $type;

    /**
     * @var mixed
     */
    public mixed $post_approval_details;

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
    public mixed $tiktok_post_details;

    /**
     * @var mixed
     */
    public mixed $gmb_post_details;

    /**
     * @var string
     */
    public string $user_id;

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
        $this->account_ids = $data['accountIds'] ?? [];
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
        $this->user_id = $data['userId'] ?? '';
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
