<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CallAssetPayloadDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CallAssetPayloadDTO
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string
     */
    public string $country_code;

    /**
     * @var string|null
     */
    public ?string $call_conversion_action = null;

    /**
     * @var array&lt;AdScheduleTargetDTO&gt;|null
     */
    public ?array $ad_schedule_targets = null;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->country_code = $data['countryCode'] ?? '';
        $this->call_conversion_action = $data['callConversionAction'] ?? null;
        // Handle array of AdScheduleTargetDTO objects
        if (isset($data['adScheduleTargets']) && is_array($data['adScheduleTargets'])) {
            $this->ad_schedule_targets = array_map(function($item) {
                return is_array($item) ? new AdScheduleTargetDTO($item) : $item;
            }, $data['adScheduleTargets']);
        } else {
            $this->ad_schedule_targets = $data['adScheduleTargets'] ?? null;
        }
        $this->resource_name = $data['resourceName'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->phone_number !== null) {
            $result['phoneNumber'] = $this->phone_number;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        if ($this->call_conversion_action !== null) {
            $result['callConversionAction'] = $this->call_conversion_action;
        }
        if ($this->ad_schedule_targets !== null) {
            $result['adScheduleTargets'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_schedule_targets);
        }
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        return $result;
    }
}
