<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpdateCustomAudienceBatchDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpdateCustomAudienceBatchDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $csv_path = null;

    /**
     * @var string
     */
    public string $operation_type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $smartlist_ids = null;

    /**
     * @var string|null
     */
    public ?string $dynamic_audience = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->csv_path = $data['csvPath'] ?? null;
        $this->operation_type = $data['operationType'] ?? '';
        $this->smartlist_ids = $data['smartlistIds'] ?? null;
        $this->dynamic_audience = $data['dynamicAudience'] ?? null;
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
        if ($this->csv_path !== null) {
            $result['csvPath'] = $this->csv_path;
        }
        if ($this->operation_type !== null) {
            $result['operationType'] = $this->operation_type;
        }
        if ($this->smartlist_ids !== null) {
            $result['smartlistIds'] = $this->smartlist_ids;
        }
        if ($this->dynamic_audience !== null) {
            $result['dynamicAudience'] = $this->dynamic_audience;
        }
        return $result;
    }
}
