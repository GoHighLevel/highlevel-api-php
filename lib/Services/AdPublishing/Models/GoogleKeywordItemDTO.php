<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleKeywordItemDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleKeywordItemDTO
{
    /**
     * @var string
     */
    public string $keyword;

    /**
     * @var string
     */
    public string $match_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->keyword = $data['keyword'] ?? '';
        $this->match_type = $data['matchType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->match_type !== null) {
            $result['matchType'] = $this->match_type;
        }
        return $result;
    }
}
