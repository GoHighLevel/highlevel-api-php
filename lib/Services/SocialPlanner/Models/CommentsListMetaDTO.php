<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentsListMetaDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentsListMetaDTO
{
    /**
     * @var float
     */
    public float $total;

    /**
     * @var float|null
     */
    public ?float $total_unread = null;

    /**
     * @var float
     */
    public float $skip;

    /**
     * @var float
     */
    public float $limit;

    /**
     * @var bool
     */
    public bool $has_more;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total = $data['total'] ?? 0;
        $this->total_unread = $data['totalUnread'] ?? null;
        $this->skip = $data['skip'] ?? 0;
        $this->limit = $data['limit'] ?? 0;
        $this->has_more = $data['hasMore'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->total_unread !== null) {
            $result['totalUnread'] = $this->total_unread;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->has_more !== null) {
            $result['hasMore'] = $this->has_more;
        }
        return $result;
    }
}
