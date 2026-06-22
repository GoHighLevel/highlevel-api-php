<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * VariationInputDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class VariationInputDTO
{
    /**
     * @var string|null
     */
    public ?string $content = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $mentions = null;

    /**
     * @var mixed
     */
    public $og_tags;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->content = $data['content'] ?? null;
        $this->mentions = $data['mentions'] ?? null;
        $this->og_tags = $data['ogTags'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->mentions !== null) {
            $result['mentions'] = $this->mentions;
        }
        if ($this->og_tags !== null) {
            $result['ogTags'] = $this->og_tags;
        }
        return $result;
    }
}
