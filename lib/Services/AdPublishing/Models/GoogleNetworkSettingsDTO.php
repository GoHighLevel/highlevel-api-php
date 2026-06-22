<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleNetworkSettingsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleNetworkSettingsDTO
{
    /**
     * @var bool
     */
    public bool $target_search_network;

    /**
     * @var bool
     */
    public bool $target_content_network;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->target_search_network = $data['targetSearchNetwork'] ?? false;
        $this->target_content_network = $data['targetContentNetwork'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->target_search_network !== null) {
            $result['targetSearchNetwork'] = $this->target_search_network;
        }
        if ($this->target_content_network !== null) {
            $result['targetContentNetwork'] = $this->target_content_network;
        }
        return $result;
    }
}
