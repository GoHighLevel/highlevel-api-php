<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CommentsGetListBodyDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CommentsGetListBodyDTO
{
    /**
     * @var string|null
     */
    public ?string $from_date = null;

    /**
     * @var string|null
     */
    public ?string $to_date = null;

    /**
     * @var array&lt;string&gt;
     */
    public array $origin_ids;

    /**
     * @var string|null
     */
    public ?string $sort_by = null;

    /**
     * @var string|null
     */
    public ?string $search = null;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->from_date = $data['fromDate'] ?? null;
        $this->to_date = $data['toDate'] ?? null;
        $this->origin_ids = $data['originIds'] ?? [];
        $this->sort_by = $data['sortBy'] ?? null;
        $this->search = $data['search'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
        $this->parent_id = $data['parentId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->from_date !== null) {
            $result['fromDate'] = $this->from_date;
        }
        if ($this->to_date !== null) {
            $result['toDate'] = $this->to_date;
        }
        if ($this->origin_ids !== null) {
            $result['originIds'] = $this->origin_ids;
        }
        if ($this->sort_by !== null) {
            $result['sortBy'] = $this->sort_by;
        }
        if ($this->search !== null) {
            $result['search'] = $this->search;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        return $result;
    }
}
