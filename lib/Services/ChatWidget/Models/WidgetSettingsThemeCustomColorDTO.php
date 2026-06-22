<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * WidgetSettingsThemeCustomColorDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class WidgetSettingsThemeCustomColorDTO
{
    /**
     * @var string|null
     */
    public ?string $chat_bubble_color = null;

    /**
     * @var string|null
     */
    public ?string $background_color = null;

    /**
     * @var string|null
     */
    public ?string $header_color = null;

    /**
     * @var string|null
     */
    public ?string $button_color = null;

    /**
     * @var string|null
     */
    public ?string $avatar_background_color = null;

    /**
     * @var string|null
     */
    public ?string $avatar_border_color = null;

    /**
     * @var string|null
     */
    public ?string $sender_message_color = null;

    /**
     * @var string|null
     */
    public ?string $received_message_color = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->chat_bubble_color = $data['chatBubbleColor'] ?? null;
        $this->background_color = $data['backgroundColor'] ?? null;
        $this->header_color = $data['headerColor'] ?? null;
        $this->button_color = $data['buttonColor'] ?? null;
        $this->avatar_background_color = $data['avatarBackgroundColor'] ?? null;
        $this->avatar_border_color = $data['avatarBorderColor'] ?? null;
        $this->sender_message_color = $data['senderMessageColor'] ?? null;
        $this->received_message_color = $data['receivedMessageColor'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->chat_bubble_color !== null) {
            $result['chatBubbleColor'] = $this->chat_bubble_color;
        }
        if ($this->background_color !== null) {
            $result['backgroundColor'] = $this->background_color;
        }
        if ($this->header_color !== null) {
            $result['headerColor'] = $this->header_color;
        }
        if ($this->button_color !== null) {
            $result['buttonColor'] = $this->button_color;
        }
        if ($this->avatar_background_color !== null) {
            $result['avatarBackgroundColor'] = $this->avatar_background_color;
        }
        if ($this->avatar_border_color !== null) {
            $result['avatarBorderColor'] = $this->avatar_border_color;
        }
        if ($this->sender_message_color !== null) {
            $result['senderMessageColor'] = $this->sender_message_color;
        }
        if ($this->received_message_color !== null) {
            $result['receivedMessageColor'] = $this->received_message_color;
        }
        return $result;
    }
}
