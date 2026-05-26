<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LinkedInAdDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class LinkedInAdDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $introductory_text = null;

    /**
     * @var string|null
     */
    public ?string $destination_url = null;

    /**
     * @var string|null
     */
    public ?string $call_to_action_label = null;

    /**
     * @var string|null
     */
    public ?string $destination_form_id = null;

    /**
     * @var string|null
     */
    public ?string $content_reference_string = null;

    /**
     * @var array&lt;LinkedInMediaDTO&gt;|null
     */
    public ?array $media = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_id = null;

    /**
     * @var string|null
     */
    public ?string $ad_id = null;

    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_group_id = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var string|null
     */
    public ?string $linked_in_error = null;

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
        $this->name = $data['name'] ?? null;
        $this->introductory_text = $data['introductoryText'] ?? null;
        $this->destination_url = $data['destinationUrl'] ?? null;
        $this->call_to_action_label = $data['callToActionLabel'] ?? null;
        $this->destination_form_id = $data['destinationFormId'] ?? null;
        $this->content_reference_string = $data['contentReferenceString'] ?? null;
        // Handle array of LinkedInMediaDTO objects
        if (isset($data['media']) && is_array($data['media'])) {
            $this->media = array_map(function($item) {
                return is_array($item) ? new LinkedInMediaDTO($item) : $item;
            }, $data['media']);
        } else {
            $this->media = $data['media'] ?? null;
        }
        $this->ad_campaign_id = $data['adCampaignId'] ?? null;
        $this->ad_id = $data['adId'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->ad_campaign_group_id = $data['adCampaignGroupId'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->linked_in_error = $data['linkedInError'] ?? null;
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
