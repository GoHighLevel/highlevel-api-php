<?php

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
    public mixed $seo;

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
