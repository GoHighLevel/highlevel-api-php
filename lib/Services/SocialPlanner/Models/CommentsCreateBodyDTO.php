<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentsCreateBodyDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentsCreateBodyDTO
{
    /**
     * @var string
     */
    public string $parent_id;

    /**
     * @var bool
     */
    public bool $is_parent_thread;

    /**
     * @var string
     */
    public string $content;

    /**
     * @var array&lt;AttachmentDTO&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var array&lt;MentionsDTO&gt;|null
     */
    public ?array $mentions = null;

    /**
     * @var bool|null
     */
    public ?bool $notify_all_group_members = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->parent_id = $data['parentId'] ?? '';
        $this->is_parent_thread = $data['isParentThread'] ?? false;
        $this->content = $data['content'] ?? '';
        // Handle array of AttachmentDTO objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new AttachmentDTO($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        // Handle array of MentionsDTO objects
        if (isset($data['mentions']) && is_array($data['mentions'])) {
            $this->mentions = array_map(function($item) {
                return is_array($item) ? new MentionsDTO($item) : $item;
            }, $data['mentions']);
        } else {
            $this->mentions = $data['mentions'] ?? null;
        }
        $this->notify_all_group_members = $data['notifyAllGroupMembers'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->is_parent_thread !== null) {
            $result['isParentThread'] = $this->is_parent_thread;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->mentions !== null) {
            $result['mentions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->mentions);
        }
        if ($this->notify_all_group_members !== null) {
            $result['notifyAllGroupMembers'] = $this->notify_all_group_members;
        }
        return $result;
    }
}
