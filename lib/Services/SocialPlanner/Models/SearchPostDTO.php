<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SearchPostDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SearchPostDTO
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $accounts = null;

    /**
     * @var string
     */
    public string $skip;

    /**
     * @var string
     */
    public string $limit;

    /**
     * @var string
     */
    public string $from_date;

    /**
     * @var string
     */
    public string $to_date;

    /**
     * @var string
     */
    public string $include_users;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $post_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->accounts = $data['accounts'] ?? null;
        $this->skip = $data['skip'] ?? '';
        $this->limit = $data['limit'] ?? '';
        $this->from_date = $data['fromDate'] ?? '';
        $this->to_date = $data['toDate'] ?? '';
        $this->include_users = $data['includeUsers'] ?? '';
        $this->post_type = $data['postType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->accounts !== null) {
            $result['accounts'] = $this->accounts;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->from_date !== null) {
            $result['fromDate'] = $this->from_date;
        }
        if ($this->to_date !== null) {
            $result['toDate'] = $this->to_date;
        }
        if ($this->include_users !== null) {
            $result['includeUsers'] = $this->include_users;
        }
        if ($this->post_type !== null) {
            $result['postType'] = $this->post_type;
        }
        return $result;
    }
}
