<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleAssetsDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleAssetsDTO
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calls = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $sitelinks = null;

    /**
     * @var string|null
     */
    public ?string $lead_form = null;

    /**
     * @var array&lt;GoogleAssetImageDTO&gt;|null
     */
    public ?array $images = null;

    /**
     * @var mixed
     */
    public mixed $business_logo;

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
        $this->calls = $data['calls'] ?? null;
        $this->sitelinks = $data['sitelinks'] ?? null;
        $this->lead_form = $data['leadForm'] ?? null;
        // Handle array of GoogleAssetImageDTO objects
        if (isset($data['images']) && is_array($data['images'])) {
            $this->images = array_map(function($item) {
                return is_array($item) ? new GoogleAssetImageDTO($item) : $item;
            }, $data['images']);
        } else {
            $this->images = $data['images'] ?? null;
        }
        $this->business_logo = $data['businessLogo'] ?? null;
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
