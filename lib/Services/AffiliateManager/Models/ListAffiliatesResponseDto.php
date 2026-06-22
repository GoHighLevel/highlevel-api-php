<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * ListAffiliatesResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class ListAffiliatesResponseDto
{
    /**
     * @var array&lt;OAuthAffiliateListItemResponseDto&gt;
     */
    public array $affiliates;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of OAuthAffiliateListItemResponseDto objects
        if (isset($data['affiliates']) && is_array($data['affiliates'])) {
            $this->affiliates = array_map(function($item) {
                return is_array($item) ? new OAuthAffiliateListItemResponseDto($item) : $item;
            }, $data['affiliates']);
        } else {
            $this->affiliates = $data['affiliates'] ?? [];
        }
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->affiliates !== null) {
            $result['affiliates'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->affiliates);
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
