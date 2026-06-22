<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CSVPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CSVPostSchema
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * @var mixed
     */
    public $link;

    /**
     * @var array&lt;CSVMediaResponseSchema&gt;|null
     */
    public ?array $medias = null;

    /**
     * @var string|null
     */
    public ?string $schedule_date = null;

    /**
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * @var string|null
     */
    public ?string $follow_up_comment = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

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
    public ?string $error_message = null;

    /**
     * @var string|null
     */
    public ?string $csv_file_type = null;

    /**
     * @var bool|null
     */
    public ?bool $media_optimization = null;

    /**
     * @var bool|null
     */
    public ?bool $apply_watermark = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->account_ids = $data['accountIds'] ?? null;
        $this->link = $data['link'] ?? null;
        // Handle array of CSVMediaResponseSchema objects
        if (isset($data['medias']) && is_array($data['medias'])) {
            $this->medias = array_map(function($item) {
                return is_array($item) ? new CSVMediaResponseSchema($item) : $item;
            }, $data['medias']);
        } else {
            $this->medias = $data['medias'] ?? null;
        }
        $this->schedule_date = $data['scheduleDate'] ?? null;
        $this->summary = $data['summary'] ?? null;
        $this->follow_up_comment = $data['followUpComment'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->tiktok_post_details = $data['tiktokPostDetails'] ?? null;
        $this->gmb_post_details = $data['gmbPostDetails'] ?? null;
        $this->error_message = $data['errorMessage'] ?? null;
        $this->csv_file_type = $data['csvFileType'] ?? null;
        $this->media_optimization = $data['mediaOptimization'] ?? null;
        $this->apply_watermark = $data['applyWatermark'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->medias !== null) {
            $result['medias'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->medias);
        }
        if ($this->schedule_date !== null) {
            $result['scheduleDate'] = $this->schedule_date;
        }
        if ($this->summary !== null) {
            $result['summary'] = $this->summary;
        }
        if ($this->follow_up_comment !== null) {
            $result['followUpComment'] = $this->follow_up_comment;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->tiktok_post_details !== null) {
            $result['tiktokPostDetails'] = $this->tiktok_post_details;
        }
        if ($this->gmb_post_details !== null) {
            $result['gmbPostDetails'] = $this->gmb_post_details;
        }
        if ($this->error_message !== null) {
            $result['errorMessage'] = $this->error_message;
        }
        if ($this->csv_file_type !== null) {
            $result['csvFileType'] = $this->csv_file_type;
        }
        if ($this->media_optimization !== null) {
            $result['mediaOptimization'] = $this->media_optimization;
        }
        if ($this->apply_watermark !== null) {
            $result['applyWatermark'] = $this->apply_watermark;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
