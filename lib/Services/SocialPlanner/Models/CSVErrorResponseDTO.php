<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CSVErrorResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CSVErrorResponseDTO
{
    /**
     * @var string
     */
    public string $code;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $file_type = null;

    /**
     * @var string|null
     */
    public ?string $csv_file_type = null;

    /**
     * @var string|null
     */
    public ?string $missing_headers = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? '';
        $this->message = $data['message'] ?? '';
        $this->file_type = $data['fileType'] ?? null;
        $this->csv_file_type = $data['csvFileType'] ?? null;
        $this->missing_headers = $data['missingHeaders'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->file_type !== null) {
            $result['fileType'] = $this->file_type;
        }
        if ($this->csv_file_type !== null) {
            $result['csvFileType'] = $this->csv_file_type;
        }
        if ($this->missing_headers !== null) {
            $result['missingHeaders'] = $this->missing_headers;
        }
        return $result;
    }
}
