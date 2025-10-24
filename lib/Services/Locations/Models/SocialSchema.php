<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SocialSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SocialSchema
{
    /**
     * @var string|null
     */
    public ?string $facebook_url = null;

    /**
     * @var string|null
     */
    public ?string $google_plus = null;

    /**
     * @var string|null
     */
    public ?string $linked_in = null;

    /**
     * @var string|null
     */
    public ?string $foursquare = null;

    /**
     * @var string|null
     */
    public ?string $twitter = null;

    /**
     * @var string|null
     */
    public ?string $yelp = null;

    /**
     * @var string|null
     */
    public ?string $instagram = null;

    /**
     * @var string|null
     */
    public ?string $youtube = null;

    /**
     * @var string|null
     */
    public ?string $pinterest = null;

    /**
     * @var string|null
     */
    public ?string $blog_rss = null;

    /**
     * @var string|null
     */
    public ?string $google_places_id = null;

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
        $this->facebook_url = $data['facebookUrl'] ?? null;
        $this->google_plus = $data['googlePlus'] ?? null;
        $this->linked_in = $data['linkedIn'] ?? null;
        $this->foursquare = $data['foursquare'] ?? null;
        $this->twitter = $data['twitter'] ?? null;
        $this->yelp = $data['yelp'] ?? null;
        $this->instagram = $data['instagram'] ?? null;
        $this->youtube = $data['youtube'] ?? null;
        $this->pinterest = $data['pinterest'] ?? null;
        $this->blog_rss = $data['blogRss'] ?? null;
        $this->google_places_id = $data['googlePlacesId'] ?? null;
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
