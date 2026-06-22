<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateOfflineUserListJobDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateOfflineUserListJobDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $smart_list_ids = null;

    /**
     * @var string|null
     */
    public ?string $csv_path = null;

    /**
     * @var string|null
     */
    public ?string $user_list_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_dynamic = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->smart_list_ids = $data['smartListIds'] ?? null;
        $this->csv_path = $data['csvPath'] ?? null;
        $this->user_list_id = $data['userListId'] ?? null;
        $this->is_dynamic = $data['isDynamic'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->smart_list_ids !== null) {
            $result['smartListIds'] = $this->smart_list_ids;
        }
        if ($this->csv_path !== null) {
            $result['csvPath'] = $this->csv_path;
        }
        if ($this->user_list_id !== null) {
            $result['userListId'] = $this->user_list_id;
        }
        if ($this->is_dynamic !== null) {
            $result['isDynamic'] = $this->is_dynamic;
        }
        return $result;
    }
}
