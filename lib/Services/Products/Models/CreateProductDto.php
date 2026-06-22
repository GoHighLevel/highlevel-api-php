<?php

namespace HighLevel\Services\Products\Models;

/**
 * CreateProductDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CreateProductDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $product_type;

    /**
     * @var string|null
     */
    public ?string $image = null;

    /**
     * @var string|null
     */
    public ?string $statement_descriptor = null;

    /**
     * @var bool|null
     */
    public ?bool $available_in_store = null;

    /**
     * @var array&lt;ProductMediaDto&gt;|null
     */
    public ?array $medias = null;

    /**
     * @var array&lt;ProductVariantDto&gt;|null
     */
    public ?array $variants = null;

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
     * @var bool|null
     */
    public ?bool $is_label_enabled = null;

    /**
     * @var mixed
     */
    public $label;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * @var mixed
     */
    public $seo;

    /**
     * @var bool|null
     */
    public ?bool $tax_inclusive = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->product_type = $data['productType'] ?? '';
        $this->image = $data['image'] ?? null;
        $this->statement_descriptor = $data['statementDescriptor'] ?? null;
        $this->available_in_store = $data['availableInStore'] ?? null;
        // Handle array of ProductMediaDto objects
        if (isset($data['medias']) && is_array($data['medias'])) {
            $this->medias = array_map(function($item) {
                return is_array($item) ? new ProductMediaDto($item) : $item;
            }, $data['medias']);
        } else {
            $this->medias = $data['medias'] ?? null;
        }
        // Handle array of ProductVariantDto objects
        if (isset($data['variants']) && is_array($data['variants'])) {
            $this->variants = array_map(function($item) {
                return is_array($item) ? new ProductVariantDto($item) : $item;
            }, $data['variants']);
        } else {
            $this->variants = $data['variants'] ?? null;
        }
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->is_taxes_enabled = $data['isTaxesEnabled'] ?? null;
        $this->taxes = $data['taxes'] ?? null;
        $this->automatic_tax_category_id = $data['automaticTaxCategoryId'] ?? null;
        $this->is_label_enabled = $data['isLabelEnabled'] ?? null;
        $this->label = $data['label'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->seo = $data['seo'] ?? null;
        $this->tax_inclusive = $data['taxInclusive'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->product_type !== null) {
            $result['productType'] = $this->product_type;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->statement_descriptor !== null) {
            $result['statementDescriptor'] = $this->statement_descriptor;
        }
        if ($this->available_in_store !== null) {
            $result['availableInStore'] = $this->available_in_store;
        }
        if ($this->medias !== null) {
            $result['medias'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->medias);
        }
        if ($this->variants !== null) {
            $result['variants'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variants);
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
        if ($this->is_label_enabled !== null) {
            $result['isLabelEnabled'] = $this->is_label_enabled;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->seo !== null) {
            $result['seo'] = $this->seo;
        }
        if ($this->tax_inclusive !== null) {
            $result['taxInclusive'] = $this->tax_inclusive;
        }
        return $result;
    }
}
