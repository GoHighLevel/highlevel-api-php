<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->facebook_url !== null) {
            $result['facebookUrl'] = $this->facebook_url;
        }
        if ($this->google_plus !== null) {
            $result['googlePlus'] = $this->google_plus;
        }
        if ($this->linked_in !== null) {
            $result['linkedIn'] = $this->linked_in;
        }
        if ($this->foursquare !== null) {
            $result['foursquare'] = $this->foursquare;
        }
        if ($this->twitter !== null) {
            $result['twitter'] = $this->twitter;
        }
        if ($this->yelp !== null) {
            $result['yelp'] = $this->yelp;
        }
        if ($this->instagram !== null) {
            $result['instagram'] = $this->instagram;
        }
        if ($this->youtube !== null) {
            $result['youtube'] = $this->youtube;
        }
        if ($this->pinterest !== null) {
            $result['pinterest'] = $this->pinterest;
        }
        if ($this->blog_rss !== null) {
            $result['blogRss'] = $this->blog_rss;
        }
        if ($this->google_places_id !== null) {
            $result['googlePlacesId'] = $this->google_places_id;
        }
        return $result;
    }
}
