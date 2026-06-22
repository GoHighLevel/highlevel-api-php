<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $service_category_id;

    /**
     * @var string
     */
    public string $service_staff_id;

    /**
     * @var string
     */
    public string $service_start_time;

    /**
     * @var string
     */
    public string $service_end_time;

    /**
     * @var array&lt;ServiceResourceDTO&gt;|null
     */
    public ?array $service_resources = null;

    /**
     * @var array&lt;ServiceAddOnResponseDTO&gt;|null
     */
    public ?array $service_add_ons = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->service_category_id = $data['serviceCategoryId'] ?? '';
        $this->service_staff_id = $data['serviceStaffId'] ?? '';
        $this->service_start_time = $data['serviceStartTime'] ?? '';
        $this->service_end_time = $data['serviceEndTime'] ?? '';
        // Handle array of ServiceResourceDTO objects
        if (isset($data['serviceResources']) && is_array($data['serviceResources'])) {
            $this->service_resources = array_map(function($item) {
                return is_array($item) ? new ServiceResourceDTO($item) : $item;
            }, $data['serviceResources']);
        } else {
            $this->service_resources = $data['serviceResources'] ?? null;
        }
        // Handle array of ServiceAddOnResponseDTO objects
        if (isset($data['serviceAddOns']) && is_array($data['serviceAddOns'])) {
            $this->service_add_ons = array_map(function($item) {
                return is_array($item) ? new ServiceAddOnResponseDTO($item) : $item;
            }, $data['serviceAddOns']);
        } else {
            $this->service_add_ons = $data['serviceAddOns'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->service_category_id !== null) {
            $result['serviceCategoryId'] = $this->service_category_id;
        }
        if ($this->service_staff_id !== null) {
            $result['serviceStaffId'] = $this->service_staff_id;
        }
        if ($this->service_start_time !== null) {
            $result['serviceStartTime'] = $this->service_start_time;
        }
        if ($this->service_end_time !== null) {
            $result['serviceEndTime'] = $this->service_end_time;
        }
        if ($this->service_resources !== null) {
            $result['serviceResources'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->service_resources);
        }
        if ($this->service_add_ons !== null) {
            $result['serviceAddOns'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->service_add_ons);
        }
        return $result;
    }
}
