<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetFacebookAccountsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetFacebookAccountsSchema
{
    /**
     * @var array&lt;FacebookPageSchema&gt;|null
     */
    public ?array $pages = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of FacebookPageSchema objects
        if (isset($data['pages']) && is_array($data['pages'])) {
            $this->pages = array_map(function($item) {
                return is_array($item) ? new FacebookPageSchema($item) : $item;
            }, $data['pages']);
        } else {
            $this->pages = $data['pages'] ?? null;
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
        return $result;
    }
}
