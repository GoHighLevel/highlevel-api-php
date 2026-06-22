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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->files_to_be_deleted !== null) {
            $result['filesToBeDeleted'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->files_to_be_deleted);
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
