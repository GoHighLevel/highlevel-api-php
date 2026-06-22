<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * UpdateTagsDTO model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class UpdateTagsDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $contacts;

    /**
     * @var array&lt;string&gt;
     */
    public array $tags;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool|null
     */
    public ?bool $remove_all_tags = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->contacts = $data['contacts'] ?? [];
        $this->tags = $data['tags'] ?? [];
        $this->location_id = $data['locationId'] ?? '';
        $this->remove_all_tags = $data['removeAllTags'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->contacts !== null) {
            $result['contacts'] = $this->contacts;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->remove_all_tags !== null) {
            $result['removeAllTags'] = $this->remove_all_tags;
        }
        return $result;
    }
}
