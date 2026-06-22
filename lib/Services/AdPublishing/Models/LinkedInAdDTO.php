<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LinkedInAdDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->introductory_text !== null) {
            $result['introductoryText'] = $this->introductory_text;
        }
        if ($this->destination_url !== null) {
            $result['destinationUrl'] = $this->destination_url;
        }
        if ($this->call_to_action_label !== null) {
            $result['callToActionLabel'] = $this->call_to_action_label;
        }
        if ($this->destination_form_id !== null) {
            $result['destinationFormId'] = $this->destination_form_id;
        }
        if ($this->content_reference_string !== null) {
            $result['contentReferenceString'] = $this->content_reference_string;
        }
        if ($this->media !== null) {
            $result['media'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->media);
        }
        if ($this->ad_campaign_id !== null) {
            $result['adCampaignId'] = $this->ad_campaign_id;
        }
        if ($this->ad_id !== null) {
            $result['adId'] = $this->ad_id;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->ad_campaign_group_id !== null) {
            $result['adCampaignGroupId'] = $this->ad_campaign_group_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->linked_in_error !== null) {
            $result['linkedInError'] = $this->linked_in_error;
        }
        return $result;
    }
}
