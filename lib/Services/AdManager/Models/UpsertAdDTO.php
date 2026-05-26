<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * UpsertAdDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class UpsertAdDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $primary_text = null;

    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $image_url = null;

    /**
     * @var string|null
     */
    public ?string $media_type = null;

    /**
     * @var array&lt;MediaDTO&gt;|null
     */
    public ?array $media = null;

    /**
     * @var bool|null
     */
    public ?bool $multi_advertiser_ads = null;

    /**
     * @var string
     */
    public string $campaign_id;

    /**
     * @var string
     */
    public string $adset_id;

    /**
     * @var string|null
     */
    public ?string $cta = null;

    /**
     * @var string|null
     */
    public ?string $conversation_form_id = null;

    /**
     * @var string|null
     */
    public ?string $destination_link = null;

    /**
     * @var string|null
     */
    public ?string $destination_form_id = null;

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
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->primary_text = $data['primaryText'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->image_url = $data['imageUrl'] ?? null;
        $this->media_type = $data['mediaType'] ?? null;
        // Handle array of MediaDTO objects
        if (isset($data['media']) && is_array($data['media'])) {
            $this->media = array_map(function($item) {
                return is_array($item) ? new MediaDTO($item) : $item;
            }, $data['media']);
        } else {
            $this->media = $data['media'] ?? null;
        }
        $this->multi_advertiser_ads = $data['multiAdvertiserAds'] ?? null;
        $this->campaign_id = $data['campaignId'] ?? '';
        $this->adset_id = $data['adsetId'] ?? '';
        $this->cta = $data['cta'] ?? null;
        $this->conversation_form_id = $data['conversationFormId'] ?? null;
        $this->destination_link = $data['destinationLink'] ?? null;
        $this->destination_form_id = $data['destinationFormId'] ?? null;
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
