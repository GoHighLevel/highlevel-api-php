<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentItemDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentItemDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $platform;

    /**
     * @var string|null
     */
    public ?string $platform_comment_id = null;

    /**
     * @var string|null
     */
    public ?string $platform_parent_id = null;

    /**
     * @var string|null
     */
    public ?string $platform_post_id = null;

    /**
     * @var string
     */
    public string $post_id;

    /**
     * @var string
     */
    public string $origin_id;

    /**
     * @var bool|null
     */
    public ?bool $is_parent_thread = null;

    /**
     * @var bool
     */
    public bool $is_post;

    /**
     * @var string|null
     */
    public ?string $content = null;

    /**
     * @var array&lt;CommentAttachmentDTO&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var mixed
     */
    public $author;

    /**
     * @var float|null
     */
    public ?float $level = null;

    /**
     * @var float
     */
    public float $like_count;

    /**
     * @var float
     */
    public float $reaction_count;

    /**
     * @var float
     */
    public float $reply_count;

    /**
     * @var float
     */
    public float $share_count;

    /**
     * @var float
     */
    public float $repost_count;

    /**
     * @var float
     */
    public float $quote_count;

    /**
     * @var string|null
     */
    public ?string $preview_link = null;

    /**
     * @var bool
     */
    public bool $is_read;

    /**
     * @var bool
     */
    public bool $is_deleted;

    /**
     * @var bool
     */
    public bool $is_edited;

    /**
     * @var string|null
     */
    public ?string $published_at = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

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
        $this->id = $data['_id'] ?? '';
        $this->platform = $data['platform'] ?? '';
        $this->platform_comment_id = $data['platformCommentId'] ?? null;
        $this->platform_parent_id = $data['platformParentId'] ?? null;
        $this->platform_post_id = $data['platformPostId'] ?? null;
        $this->post_id = $data['postId'] ?? '';
        $this->origin_id = $data['originId'] ?? '';
        $this->is_parent_thread = $data['isParentThread'] ?? null;
        $this->is_post = $data['isPost'] ?? false;
        $this->content = $data['content'] ?? null;
        // Handle array of CommentAttachmentDTO objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new CommentAttachmentDTO($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->author = $data['author'] ?? null;
        $this->level = $data['level'] ?? null;
        $this->like_count = $data['likeCount'] ?? 0;
        $this->reaction_count = $data['reactionCount'] ?? 0;
        $this->reply_count = $data['replyCount'] ?? 0;
        $this->share_count = $data['shareCount'] ?? 0;
        $this->repost_count = $data['repostCount'] ?? 0;
        $this->quote_count = $data['quoteCount'] ?? 0;
        $this->preview_link = $data['previewLink'] ?? null;
        $this->is_read = $data['isRead'] ?? false;
        $this->is_deleted = $data['isDeleted'] ?? false;
        $this->is_edited = $data['isEdited'] ?? false;
        $this->published_at = $data['publishedAt'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->platform_comment_id !== null) {
            $result['platformCommentId'] = $this->platform_comment_id;
        }
        if ($this->platform_parent_id !== null) {
            $result['platformParentId'] = $this->platform_parent_id;
        }
        if ($this->platform_post_id !== null) {
            $result['platformPostId'] = $this->platform_post_id;
        }
        if ($this->post_id !== null) {
            $result['postId'] = $this->post_id;
        }
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->is_parent_thread !== null) {
            $result['isParentThread'] = $this->is_parent_thread;
        }
        if ($this->is_post !== null) {
            $result['isPost'] = $this->is_post;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->author !== null) {
            $result['author'] = $this->author;
        }
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->like_count !== null) {
            $result['likeCount'] = $this->like_count;
        }
        if ($this->reaction_count !== null) {
            $result['reactionCount'] = $this->reaction_count;
        }
        if ($this->reply_count !== null) {
            $result['replyCount'] = $this->reply_count;
        }
        if ($this->share_count !== null) {
            $result['shareCount'] = $this->share_count;
        }
        if ($this->repost_count !== null) {
            $result['repostCount'] = $this->repost_count;
        }
        if ($this->quote_count !== null) {
            $result['quoteCount'] = $this->quote_count;
        }
        if ($this->preview_link !== null) {
            $result['previewLink'] = $this->preview_link;
        }
        if ($this->is_read !== null) {
            $result['isRead'] = $this->is_read;
        }
        if ($this->is_deleted !== null) {
            $result['isDeleted'] = $this->is_deleted;
        }
        if ($this->is_edited !== null) {
            $result['isEdited'] = $this->is_edited;
        }
        if ($this->published_at !== null) {
            $result['publishedAt'] = $this->published_at;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
