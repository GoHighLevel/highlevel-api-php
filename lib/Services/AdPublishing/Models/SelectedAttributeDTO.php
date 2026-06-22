<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * SelectedAttributeDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class SelectedAttributeDTO
{
    /**
     * @var string
     */
    public string $urn;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $category_name;

    /**
     * @var string
     */
    public string $facet;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->urn = $data['urn'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->category_name = $data['categoryName'] ?? '';
        $this->facet = $data['facet'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->urn !== null) {
            $result['urn'] = $this->urn;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->category_name !== null) {
            $result['categoryName'] = $this->category_name;
        }
        if ($this->facet !== null) {
            $result['facet'] = $this->facet;
        }
        return $result;
    }
}
