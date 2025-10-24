<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductDto
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
    public mixed $label;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * @var mixed
     */
    public mixed $seo;

    /**
     * @var bool|null
     */
    public ?bool $tax_inclusive = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $prices = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        $this->prices = $data['prices'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
