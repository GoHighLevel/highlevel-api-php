<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * CloneChatWidgetDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class CloneChatWidgetDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $chat_widget_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->chat_widget_id = $data['chatWidgetId'] ?? '';
        $this->name = $data['name'] ?? null;
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
        if ($this->chat_widget_id !== null) {
            $result['chatWidgetId'] = $this->chat_widget_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }
}
