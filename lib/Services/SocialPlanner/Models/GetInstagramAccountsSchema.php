<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetInstagramAccountsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetInstagramAccountsSchema
{
    /**
     * @var array&lt;InstagramAccountSchema&gt;|null
     */
    public ?array $accounts = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of InstagramAccountSchema objects
        if (isset($data['accounts']) && is_array($data['accounts'])) {
            $this->accounts = array_map(function($item) {
                return is_array($item) ? new InstagramAccountSchema($item) : $item;
            }, $data['accounts']);
        } else {
            $this->accounts = $data['accounts'] ?? null;
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
        if ($this->accounts !== null) {
            $result['accounts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->accounts);
        }
        return $result;
    }
}
