<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentsGetListResultsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentsGetListResultsDTO
{
    /**
     * @var array&lt;CommentItemDTO&gt;
     */
    public array $comments;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CommentItemDTO objects
        if (isset($data['comments']) && is_array($data['comments'])) {
            $this->comments = array_map(function($item) {
                return is_array($item) ? new CommentItemDTO($item) : $item;
            }, $data['comments']);
        } else {
            $this->comments = $data['comments'] ?? [];
        }
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->comments !== null) {
            $result['comments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->comments);
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
