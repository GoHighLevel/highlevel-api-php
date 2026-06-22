<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertAdDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
        if ($this->primary_text !== null) {
            $result['primaryText'] = $this->primary_text;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->media_type !== null) {
            $result['mediaType'] = $this->media_type;
        }
        if ($this->media !== null) {
            $result['media'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->media);
        }
        if ($this->multi_advertiser_ads !== null) {
            $result['multiAdvertiserAds'] = $this->multi_advertiser_ads;
        }
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
        }
        if ($this->adset_id !== null) {
            $result['adsetId'] = $this->adset_id;
        }
        if ($this->cta !== null) {
            $result['cta'] = $this->cta;
        }
        if ($this->conversation_form_id !== null) {
            $result['conversationFormId'] = $this->conversation_form_id;
        }
        if ($this->destination_link !== null) {
            $result['destinationLink'] = $this->destination_link;
        }
        if ($this->destination_form_id !== null) {
            $result['destinationFormId'] = $this->destination_form_id;
        }
        return $result;
    }
}
