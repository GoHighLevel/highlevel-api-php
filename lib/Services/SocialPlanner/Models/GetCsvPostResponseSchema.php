<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetCsvPostResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetCsvPostResponseSchema
{
    /**
     * @var mixed
     */
    public $csv;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * @var array&lt;CSVPostSchema&gt;|null
     */
    public ?array $posts = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->csv = $data['csv'] ?? null;
        $this->count = $data['count'] ?? null;
        // Handle array of CSVPostSchema objects
        if (isset($data['posts']) && is_array($data['posts'])) {
            $this->posts = array_map(function($item) {
                return is_array($item) ? new CSVPostSchema($item) : $item;
            }, $data['posts']);
        } else {
            $this->posts = $data['posts'] ?? null;
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
        if ($this->csv !== null) {
            $result['csv'] = $this->csv;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->posts !== null) {
            $result['posts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->posts);
        }
        return $result;
    }
}
