<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Medias\Models;

/**
 * UpdateMediaObjects model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class UpdateMediaObjects
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var array&lt;UpdateMediaObject&gt;
     */
    public array $files_to_be_updated;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of UpdateMediaObject objects
        if (isset($data['filesToBeUpdated']) && is_array($data['filesToBeUpdated'])) {
            $this->files_to_be_updated = array_map(function($item) {
                return is_array($item) ? new UpdateMediaObject($item) : $item;
            }, $data['filesToBeUpdated']);
        } else {
            $this->files_to_be_updated = $data['filesToBeUpdated'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->files_to_be_updated !== null) {
            $result['filesToBeUpdated'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->files_to_be_updated);
        }
        return $result;
    }
}
