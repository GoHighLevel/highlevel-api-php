<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\CustomMenus\Models;

/**
 * GetSingleCustomMenusSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class GetSingleCustomMenusSuccessfulResponseDTO
{
    /**
     * @var mixed
     */
    public $custom_menu;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->custom_menu = $data['customMenu'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->custom_menu !== null) {
            $result['customMenu'] = $this->custom_menu;
        }
        return $result;
    }
}
