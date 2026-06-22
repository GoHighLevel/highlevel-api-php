<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UpdateQueueItemDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UpdateQueueItemDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $session_id = null;

    /**
     * @var mixed
     */
    public $modified_post_payload;

    /**
     * @var mixed
     */
    public $new_order;

    /**
     * @var array&lt;VariationInputDTO&gt;|null
     */
    public ?array $variations = null;

    /**
     * @var string|null
     */
    public ?string $primary_image = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? null;
        $this->modified_post_payload = $data['modifiedPostPayload'] ?? null;
        $this->new_order = $data['newOrder'] ?? null;
        // Handle array of VariationInputDTO objects
        if (isset($data['variations']) && is_array($data['variations'])) {
            $this->variations = array_map(function($item) {
                return is_array($item) ? new VariationInputDTO($item) : $item;
            }, $data['variations']);
        } else {
            $this->variations = $data['variations'] ?? null;
        }
        $this->primary_image = $data['primaryImage'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->session_id !== null) {
            $result['sessionId'] = $this->session_id;
        }
        if ($this->modified_post_payload !== null) {
            $result['modifiedPostPayload'] = $this->modified_post_payload;
        }
        if ($this->new_order !== null) {
            $result['newOrder'] = $this->new_order;
        }
        if ($this->variations !== null) {
            $result['variations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variations);
        }
        if ($this->primary_image !== null) {
            $result['primaryImage'] = $this->primary_image;
        }
        return $result;
    }
}
