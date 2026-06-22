<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceSegmentsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceSegmentsDTO
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_audiences = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $user_lists = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $user_interests = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->custom_audiences = $data['customAudiences'] ?? null;
        $this->user_lists = $data['userLists'] ?? null;
        $this->user_interests = $data['userInterests'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->custom_audiences !== null) {
            $result['customAudiences'] = $this->custom_audiences;
        }
        if ($this->user_lists !== null) {
            $result['userLists'] = $this->user_lists;
        }
        if ($this->user_interests !== null) {
            $result['userInterests'] = $this->user_interests;
        }
        return $result;
    }
}
