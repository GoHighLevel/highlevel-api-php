<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * BulkEditProductDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkEditProductDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $image = null;

    /**
     * @var bool|null
     */
    public ?bool $available_in_store = null;

    /**
     * @var array&lt;BulkEditPriceDto&gt;|null
     */
    public ?array $prices = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $collection_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $is_label_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $is_taxes_enabled = null;

    /**
     * @var mixed
     */
    public $seo;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * @var string|null
     */
    public ?string $automatic_tax_category_id = null;

    /**
     * @var bool|null
     */
    public ?bool $tax_inclusive = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $taxes = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $medias = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $label = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->available_in_store = $data['availableInStore'] ?? null;
        // Handle array of BulkEditPriceDto objects
        if (isset($data['prices']) && is_array($data['prices'])) {
            $this->prices = array_map(function($item) {
                return is_array($item) ? new BulkEditPriceDto($item) : $item;
            }, $data['prices']);
        } else {
            $this->prices = $data['prices'] ?? null;
        }
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->is_label_enabled = $data['isLabelEnabled'] ?? null;
        $this->is_taxes_enabled = $data['isTaxesEnabled'] ?? null;
        $this->seo = $data['seo'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->automatic_tax_category_id = $data['automaticTaxCategoryId'] ?? null;
        $this->tax_inclusive = $data['taxInclusive'] ?? null;
        $this->taxes = $data['taxes'] ?? null;
        $this->medias = $data['medias'] ?? null;
        $this->label = $data['label'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->available_in_store !== null) {
            $result['availableInStore'] = $this->available_in_store;
        }
        if ($this->prices !== null) {
            $result['prices'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->prices);
        }
        if ($this->collection_ids !== null) {
            $result['collectionIds'] = $this->collection_ids;
        }
        if ($this->is_label_enabled !== null) {
            $result['isLabelEnabled'] = $this->is_label_enabled;
        }
        if ($this->is_taxes_enabled !== null) {
            $result['isTaxesEnabled'] = $this->is_taxes_enabled;
        }
        if ($this->seo !== null) {
            $result['seo'] = $this->seo;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->automatic_tax_category_id !== null) {
            $result['automaticTaxCategoryId'] = $this->automatic_tax_category_id;
        }
        if ($this->tax_inclusive !== null) {
            $result['taxInclusive'] = $this->tax_inclusive;
        }
        if ($this->taxes !== null) {
            $result['taxes'] = $this->taxes;
        }
        if ($this->medias !== null) {
            $result['medias'] = $this->medias;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        return $result;
    }
}
