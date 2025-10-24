<?php

namespace HighLevel\Services\Products\Models;

/**
 * BulkUpdateDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkUpdateDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;
     */
    public array $product_ids;

    /**
     * @var mixed
     */
    public mixed $filters;

    /**
     * @var mixed
     */
    public mixed $price;

    /**
     * @var mixed
     */
    public mixed $compare_at_price;

    /**
     * @var bool|null
     */
    public ?bool $availability = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $collection_ids = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

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
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->product_ids = $data['productIds'] ?? [];
        $this->filters = $data['filters'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->compare_at_price = $data['compareAtPrice'] ?? null;
        $this->availability = $data['availability'] ?? null;
        $this->collection_ids = $data['collectionIds'] ?? null;
        $this->currency = $data['currency'] ?? null;
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
