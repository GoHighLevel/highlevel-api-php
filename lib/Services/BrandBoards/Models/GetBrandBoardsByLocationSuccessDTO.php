<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * GetBrandBoardsByLocationSuccessDTO model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class GetBrandBoardsByLocationSuccessDTO
{
    /**
     * @var array&lt;BrandBoardListItemDTO&gt;
     */
    public array $brand_boards;

    /**
     * @var float
     */
    public float $total_count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BrandBoardListItemDTO objects
        if (isset($data['brandBoards']) && is_array($data['brandBoards'])) {
            $this->brand_boards = array_map(function($item) {
                return is_array($item) ? new BrandBoardListItemDTO($item) : $item;
            }, $data['brandBoards']);
        } else {
            $this->brand_boards = $data['brandBoards'] ?? [];
        }
        $this->total_count = $data['totalCount'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->brand_boards !== null) {
            $result['brandBoards'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->brand_boards);
        }
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        return $result;
    }
}
