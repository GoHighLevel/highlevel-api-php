<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CsvResponse model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CsvResponse
{
    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $file_name = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * @var string|null
     */
    public ?string $file = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var string|null
     */
    public ?string $approver = null;

    /**
     * @var string|null
     */
    public ?string $csv_file_type = null;

    /**
     * @var bool|null
     */
    public ?bool $media_optimization = null;

    /**
     * @var bool|null
     */
    public ?bool $apply_watermark = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? null;
        $this->file_name = $data['fileName'] ?? null;
        $this->account_ids = $data['accountIds'] ?? null;
        $this->file = $data['file'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->count = $data['count'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
        $this->origin_id = $data['originId'] ?? null;
        $this->approver = $data['approver'] ?? null;
        $this->csv_file_type = $data['csvFileType'] ?? null;
        $this->media_optimization = $data['mediaOptimization'] ?? null;
        $this->apply_watermark = $data['applyWatermark'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
        if ($this->file_name !== null) {
            $result['fileName'] = $this->file_name;
        }
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->approver !== null) {
            $result['approver'] = $this->approver;
        }
        if ($this->csv_file_type !== null) {
            $result['csvFileType'] = $this->csv_file_type;
        }
        if ($this->media_optimization !== null) {
            $result['mediaOptimization'] = $this->media_optimization;
        }
        if ($this->apply_watermark !== null) {
            $result['applyWatermark'] = $this->apply_watermark;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
