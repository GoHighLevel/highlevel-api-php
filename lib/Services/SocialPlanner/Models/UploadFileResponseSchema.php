<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UploadFileResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UploadFileResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $file_path = null;

    /**
     * @var float|null
     */
    public ?float $rows_count = null;

    /**
     * @var string|null
     */
    public ?string $file_name = null;

    /**
     * @var float|null
     */
    public ?float $file_size = null;

    /**
     * @var string|null
     */
    public ?string $csv_file_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->file_path = $data['filePath'] ?? null;
        $this->rows_count = $data['rowsCount'] ?? null;
        $this->file_name = $data['fileName'] ?? null;
        $this->file_size = $data['fileSize'] ?? null;
        $this->csv_file_type = $data['csvFileType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->file_path !== null) {
            $result['filePath'] = $this->file_path;
        }
        if ($this->rows_count !== null) {
            $result['rowsCount'] = $this->rows_count;
        }
        if ($this->file_name !== null) {
            $result['fileName'] = $this->file_name;
        }
        if ($this->file_size !== null) {
            $result['fileSize'] = $this->file_size;
        }
        if ($this->csv_file_type !== null) {
            $result['csvFileType'] = $this->csv_file_type;
        }
        return $result;
    }
}
