<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PostInsightsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PostInsightsSchema
{
    /**
     * @var float|null
     */
    public ?float $like = null;

    /**
     * @var float|null
     */
    public ?float $share = null;

    /**
     * @var float|null
     */
    public ?float $comment = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->like = $data['like'] ?? null;
        $this->share = $data['share'] ?? null;
        $this->comment = $data['comment'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->like !== null) {
            $result['like'] = $this->like;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        return $result;
    }
}
