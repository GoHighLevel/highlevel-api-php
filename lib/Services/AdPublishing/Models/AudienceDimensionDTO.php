<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceDimensionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceDimensionDTO
{
    /**
     * @var bool|null
     */
    public ?bool $is_age_unknown = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $age_ranges = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $genders = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $parental_statuses = null;

    /**
     * @var mixed
     */
    public $audience_segments;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_age_unknown = $data['isAgeUnknown'] ?? null;
        $this->age_ranges = $data['ageRanges'] ?? null;
        $this->genders = $data['genders'] ?? null;
        $this->parental_statuses = $data['parentalStatuses'] ?? null;
        $this->audience_segments = $data['audienceSegments'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->is_age_unknown !== null) {
            $result['isAgeUnknown'] = $this->is_age_unknown;
        }
        if ($this->age_ranges !== null) {
            $result['ageRanges'] = $this->age_ranges;
        }
        if ($this->genders !== null) {
            $result['genders'] = $this->genders;
        }
        if ($this->parental_statuses !== null) {
            $result['parentalStatuses'] = $this->parental_statuses;
        }
        if ($this->audience_segments !== null) {
            $result['audienceSegments'] = $this->audience_segments;
        }
        return $result;
    }
}
