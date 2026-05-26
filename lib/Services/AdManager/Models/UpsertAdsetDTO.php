<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * UpsertAdsetDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class UpsertAdsetDTO
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
    public ?string $page_id = null;

    /**
     * @var string|null
     */
    public ?string $instagram_actor_id = null;

    /**
     * @var string|null
     */
    public ?string $messaging_platforms = null;

    /**
     * @var string|null
     */
    public ?string $whatsapp_number = null;

    /**
     * @var mixed
     */
    public mixed $audience;

    /**
     * @var mixed
     */
    public mixed $budget;

    /**
     * @var string|null
     */
    public ?string $conversion_location = null;

    /**
     * @var string|null
     */
    public ?string $custom_event_type = null;

    /**
     * @var string|null
     */
    public ?string $pixel_id = null;

    /**
     * @var string
     */
    public string $campaign_id;

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
        $this->page_id = $data['pageId'] ?? null;
        $this->instagram_actor_id = $data['instagramActorId'] ?? null;
        $this->messaging_platforms = $data['messagingPlatforms'] ?? null;
        $this->whatsapp_number = $data['whatsappNumber'] ?? null;
        $this->audience = $data['audience'] ?? null;
        $this->budget = $data['budget'] ?? null;
        $this->conversion_location = $data['conversionLocation'] ?? null;
        $this->custom_event_type = $data['customEventType'] ?? null;
        $this->pixel_id = $data['pixelId'] ?? null;
        $this->campaign_id = $data['campaignId'] ?? '';
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
