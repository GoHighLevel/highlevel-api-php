<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetLinkedInAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetLinkedInAccountSchema
{
    /**
     * @var array&lt;LinkedInPageSchema&gt;|null
     */
    public ?array $pages = null;

    /**
     * @var array&lt;LinkedInProfileSchema&gt;|null
     */
    public ?array $profile = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of LinkedInPageSchema objects
        if (isset($data['pages']) && is_array($data['pages'])) {
            $this->pages = array_map(function($item) {
                return is_array($item) ? new LinkedInPageSchema($item) : $item;
            }, $data['pages']);
        } else {
            $this->pages = $data['pages'] ?? null;
        }
        // Handle array of LinkedInProfileSchema objects
        if (isset($data['profile']) && is_array($data['profile'])) {
            $this->profile = array_map(function($item) {
                return is_array($item) ? new LinkedInProfileSchema($item) : $item;
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
        if ($this->pages !== null) {
            $result['pages'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->pages);
        }
        if ($this->profile !== null) {
            $result['profile'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->profile);
        }
        return $result;
    }
}
