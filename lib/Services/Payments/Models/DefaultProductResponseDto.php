<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * DefaultProductResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class DefaultProductResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;ProductVariantDto&gt;|null
     */
    public ?array $variants = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $product_type;

    /**
     * @var bool|null
     */
    public ?bool $available_in_store = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $statement_descriptor = null;

    /**
     * @var string|null
     */
    public ?string $image = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $collection_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $is_taxes_enabled = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $taxes = null;

    /**
     * @var string|null
     */
    public ?string $automatic_tax_category_id = null;

    /**
     * @var mixed
     */
    public $label;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->description = $data['description'] ?? null;
        // Handle array of ProductVariantDto objects
        if (isset($data['variants']) && is_array($data['variants'])) {
            $this->variants = array_map(function($item) {
                return is_array($item) ? new ProductVariantDto($item) : $item;
            }, $data['variants']);
        } else {
            $this->variants = $data['variants'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->product_type = $data['productType'] ?? '';
        $this->available_in_store = $data['availableInStore'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->statement_descriptor = $data['statementDescriptor'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->is_taxes_enabled = $data['isTaxesEnabled'] ?? null;
        $this->taxes = $data['taxes'] ?? null;
        $this->automatic_tax_category_id = $data['automaticTaxCategoryId'] ?? null;
        $this->label = $data['label'] ?? null;
        $this->slug = $data['slug'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->variants !== null) {
            $result['variants'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variants);
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->product_type !== null) {
            $result['productType'] = $this->product_type;
        }
        if ($this->available_in_store !== null) {
            $result['availableInStore'] = $this->available_in_store;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->statement_descriptor !== null) {
            $result['statementDescriptor'] = $this->statement_descriptor;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->collection_ids !== null) {
            $result['collectionIds'] = $this->collection_ids;
        }
        if ($this->is_taxes_enabled !== null) {
            $result['isTaxesEnabled'] = $this->is_taxes_enabled;
        }
        if ($this->taxes !== null) {
            $result['taxes'] = $this->taxes;
        }
        if ($this->automatic_tax_category_id !== null) {
            $result['automaticTaxCategoryId'] = $this->automatic_tax_category_id;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        return $result;
    }
}
