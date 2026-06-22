<?php

namespace HighLevel\Services\Objects\Models;

/**
 * IRecordSchema model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class IRecordSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;string&gt;
     */
    public array $owner;

    /**
     * @var array&lt;string&gt;
     */
    public array $followers;

    /**
     * @var string
     */
    public string $properties;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->owner = $data['owner'] ?? [];
        $this->followers = $data['followers'] ?? [];
        $this->properties = $data['properties'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
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
            $result['id'] = $this->id;
        }
        if ($this->owner !== null) {
            $result['owner'] = $this->owner;
        }
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        if ($this->properties !== null) {
            $result['properties'] = $this->properties;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        return $result;
    }
}
