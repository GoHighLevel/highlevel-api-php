<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * SitelinkAssetPayloadDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class SitelinkAssetPayloadDTO
{
    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * @var string
     */
    public string $link_text;

    /**
     * @var string
     */
    public string $final_urls;

    /**
     * @var string|null
     */
    public ?string $description1 = null;

    /**
     * @var string|null
     */
    public ?string $description2 = null;

    /**
     * @var string|null
     */
    public ?string $start_date = null;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var array&lt;AdScheduleTargetDTO&gt;|null
     */
    public ?array $ad_schedule_targets = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->resource_name = $data['resourceName'] ?? null;
        $this->link_text = $data['linkText'] ?? '';
        $this->final_urls = $data['finalUrls'] ?? '';
        $this->description1 = $data['description1'] ?? null;
        $this->description2 = $data['description2'] ?? null;
        $this->start_date = $data['startDate'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
        // Handle array of AdScheduleTargetDTO objects
        if (isset($data['adScheduleTargets']) && is_array($data['adScheduleTargets'])) {
            $this->ad_schedule_targets = array_map(function($item) {
                return is_array($item) ? new AdScheduleTargetDTO($item) : $item;
            }, $data['adScheduleTargets']);
        } else {
            $this->ad_schedule_targets = $data['adScheduleTargets'] ?? null;
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
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        if ($this->link_text !== null) {
            $result['linkText'] = $this->link_text;
        }
        if ($this->final_urls !== null) {
            $result['finalUrls'] = $this->final_urls;
        }
        if ($this->description1 !== null) {
            $result['description1'] = $this->description1;
        }
        if ($this->description2 !== null) {
            $result['description2'] = $this->description2;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->ad_schedule_targets !== null) {
            $result['adScheduleTargets'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_schedule_targets);
        }
        return $result;
    }
}
