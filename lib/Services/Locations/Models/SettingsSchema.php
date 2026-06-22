<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SettingsSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SettingsSchema
{
    /**
     * @var bool|null
     */
    public ?bool $allow_duplicate_contact = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_duplicate_opportunity = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_facebook_name_merge = null;

    /**
     * @var bool|null
     */
    public ?bool $disable_contact_timezone = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->allow_duplicate_contact = $data['allowDuplicateContact'] ?? null;
        $this->allow_duplicate_opportunity = $data['allowDuplicateOpportunity'] ?? null;
        $this->allow_facebook_name_merge = $data['allowFacebookNameMerge'] ?? null;
        $this->disable_contact_timezone = $data['disableContactTimezone'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->allow_duplicate_contact !== null) {
            $result['allowDuplicateContact'] = $this->allow_duplicate_contact;
        }
        if ($this->allow_duplicate_opportunity !== null) {
            $result['allowDuplicateOpportunity'] = $this->allow_duplicate_opportunity;
        }
        if ($this->allow_facebook_name_merge !== null) {
            $result['allowFacebookNameMerge'] = $this->allow_facebook_name_merge;
        }
        if ($this->disable_contact_timezone !== null) {
            $result['disableContactTimezone'] = $this->disable_contact_timezone;
        }
        return $result;
    }
}
