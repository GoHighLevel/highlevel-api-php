<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * AcknowledgementDetailsDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class AcknowledgementDetailsDTO
{
    /**
     * @var string|null
     */
    public ?string $icon = null;

    /**
     * @var string|null
     */
    public ?string $placeholder_color = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_icon = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_placeholder_color = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->icon = $data['icon'] ?? null;
        $this->placeholder_color = $data['placeholderColor'] ?? null;
        $this->live_chat_icon = $data['liveChatIcon'] ?? null;
        $this->live_chat_placeholder_color = $data['liveChatPlaceholderColor'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->icon !== null) {
            $result['icon'] = $this->icon;
        }
        if ($this->placeholder_color !== null) {
            $result['placeholderColor'] = $this->placeholder_color;
        }
        if ($this->live_chat_icon !== null) {
            $result['liveChatIcon'] = $this->live_chat_icon;
        }
        if ($this->live_chat_placeholder_color !== null) {
            $result['liveChatPlaceholderColor'] = $this->live_chat_placeholder_color;
        }
        return $result;
    }
}
