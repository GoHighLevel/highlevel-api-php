<?php

namespace HighLevel\Services\Saas\Models;

/**
 * BulkEnableSaasRequestDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class BulkEnableSaasRequestDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $location_ids;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var mixed
     */
    public $action_payload;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_ids = $data['locationIds'] ?? [];
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->action_payload = $data['actionPayload'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_ids !== null) {
            $result['locationIds'] = $this->location_ids;
        }
        if ($this->is_saa_s_v2 !== null) {
            $result['isSaaSV2'] = $this->is_saa_s_v2;
        }
        if ($this->action_payload !== null) {
            $result['actionPayload'] = $this->action_payload;
        }
        return $result;
    }
}
