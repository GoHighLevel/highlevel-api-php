<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DeletePostCsvSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DeletePostCsvSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

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
    public ?string $status = null;

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
        $this->id = $data['_id'] ?? null;
        $this->csv_file_type = $data['csvFileType'] ?? null;
        $this->media_optimization = $data['mediaOptimization'] ?? null;
        $this->apply_watermark = $data['applyWatermark'] ?? null;
        $this->status = $data['status'] ?? null;
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
