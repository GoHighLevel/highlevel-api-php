<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleCarouselCardDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleCarouselCardDTO
{
    /**
     * @var string|null
     */
    public ?string $headline = null;

    /**
     * @var string|null
     */
    public ?string $final_url = null;

    /**
     * @var string|null
     */
    public ?string $call_to_action_label = null;

    /**
     * @var array&lt;GoogleMediaDTO&gt;|null
     */
    public ?array $media = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->headline = $data['headline'] ?? null;
        $this->final_url = $data['finalUrl'] ?? null;
        $this->call_to_action_label = $data['callToActionLabel'] ?? null;
        // Handle array of GoogleMediaDTO objects
        if (isset($data['media']) && is_array($data['media'])) {
            $this->media = array_map(function($item) {
                return is_array($item) ? new GoogleMediaDTO($item) : $item;
            }, $data['media']);
        } else {
            $this->media = $data['media'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->final_url !== null) {
            $result['finalUrl'] = $this->final_url;
        }
        if ($this->call_to_action_label !== null) {
            $result['callToActionLabel'] = $this->call_to_action_label;
        }
        if ($this->media !== null) {
            $result['media'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->media);
        }
        return $result;
    }
}
