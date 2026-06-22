<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetPinterestAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetPinterestAccountSchema
{
    /**
     * @var array&lt;PinterestProfileSchema&gt;|null
     */
    public ?array $profile = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of PinterestProfileSchema objects
        if (isset($data['profile']) && is_array($data['profile'])) {
            $this->profile = array_map(function($item) {
                return is_array($item) ? new PinterestProfileSchema($item) : $item;
            }, $data['profile']);
        } else {
            $this->profile = $data['profile'] ?? null;
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
        if ($this->profile !== null) {
            $result['profile'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->profile);
        }
        return $result;
    }
}
