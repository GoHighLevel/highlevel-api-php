<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * TeamMemberResponse model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class TeamMemberResponse
{
    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var float|null
     */
    public ?float $priority = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location_type = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var bool|null
     */
    public ?bool $is_primary = null;

    /**
     * @var array&lt;LocationConfigurationResponse&gt;|null
     */
    public ?array $location_configurations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->user_id = $data['userId'] ?? '';
        $this->priority = $data['priority'] ?? null;
        $this->meeting_location_type = $data['meetingLocationType'] ?? null;
        $this->meeting_location = $data['meetingLocation'] ?? null;
        $this->is_primary = $data['isPrimary'] ?? null;
        // Handle array of LocationConfigurationResponse objects
        if (isset($data['locationConfigurations']) && is_array($data['locationConfigurations'])) {
            $this->location_configurations = array_map(function($item) {
                return is_array($item) ? new LocationConfigurationResponse($item) : $item;
            }, $data['locationConfigurations']);
        } else {
            $this->location_configurations = $data['locationConfigurations'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->priority !== null) {
            $result['priority'] = $this->priority;
        }
        if ($this->meeting_location_type !== null) {
            $result['meetingLocationType'] = $this->meeting_location_type;
        }
        if ($this->meeting_location !== null) {
            $result['meetingLocation'] = $this->meeting_location;
        }
        if ($this->is_primary !== null) {
            $result['isPrimary'] = $this->is_primary;
        }
        if ($this->location_configurations !== null) {
            $result['locationConfigurations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->location_configurations);
        }
        return $result;
    }
}
