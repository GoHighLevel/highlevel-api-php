<?php

namespace HighLevel\Services\Medias\Models;

/**
 * DeleteMediaObjectsBodyParams model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class DeleteMediaObjectsBodyParams
{
    /**
     * @var array&lt;DeleteMediaObjectItem&gt;
     */
    public array $files_to_be_deleted;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $status;

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
        // Handle array of DeleteMediaObjectItem objects
        if (isset($data['filesToBeDeleted']) && is_array($data['filesToBeDeleted'])) {
            $this->files_to_be_deleted = array_map(function($item) {
                return is_array($item) ? new DeleteMediaObjectItem($item) : $item;
            }, $data['filesToBeDeleted']);
        } else {
            $this->files_to_be_deleted = $data['filesToBeDeleted'] ?? [];
        }
        $this->alt_type = $data['altType'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->status = $data['status'] ?? '';
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
