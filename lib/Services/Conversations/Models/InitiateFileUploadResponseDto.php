<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * InitiateFileUploadResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class InitiateFileUploadResponseDto
{
    /**
     * @var string
     */
    public string $upload_url;

    /**
     * @var string
     */
    public string $upload_id;

    /**
     * @var string
     */
    public string $file_path;

    /**
     * @var float
     */
    public float $expires_at;

    /**
     * @var float
     */
    public float $max_file_size;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->upload_url = $data['uploadUrl'] ?? '';
        $this->upload_id = $data['uploadId'] ?? '';
        $this->file_path = $data['filePath'] ?? '';
        $this->expires_at = $data['expiresAt'] ?? 0;
        $this->max_file_size = $data['maxFileSize'] ?? 0;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
