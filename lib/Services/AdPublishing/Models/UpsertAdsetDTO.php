<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertAdsetDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
     * @var array&lt;string&gt;|null
     */
    public ?array $messaging_platforms = null;

    /**
     * @var string|null
     */
    public ?string $whatsapp_number = null;

    /**
     * @var mixed
     */
    public $audience;

    /**
     * @var mixed
     */
    public $budget;

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
            $result['id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->page_id !== null) {
            $result['pageId'] = $this->page_id;
        }
        if ($this->instagram_actor_id !== null) {
            $result['instagramActorId'] = $this->instagram_actor_id;
        }
        if ($this->messaging_platforms !== null) {
            $result['messagingPlatforms'] = $this->messaging_platforms;
        }
        if ($this->whatsapp_number !== null) {
            $result['whatsappNumber'] = $this->whatsapp_number;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->conversion_location !== null) {
            $result['conversionLocation'] = $this->conversion_location;
        }
        if ($this->custom_event_type !== null) {
            $result['customEventType'] = $this->custom_event_type;
        }
        if ($this->pixel_id !== null) {
            $result['pixelId'] = $this->pixel_id;
        }
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
        }
        return $result;
    }
}
