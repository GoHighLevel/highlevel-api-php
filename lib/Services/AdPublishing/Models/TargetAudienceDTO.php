<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * TargetAudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class TargetAudienceDTO
{
    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $include = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $exclude = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->include = $data['include'] ?? null;
        $this->exclude = $data['exclude'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->include !== null) {
            $result['include'] = $this->include;
        }
        if ($this->exclude !== null) {
            $result['exclude'] = $this->exclude;
        }
        return $result;
    }
}
