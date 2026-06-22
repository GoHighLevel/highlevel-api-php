<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * UpdateWidgetDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class UpdateWidgetDTO
{
    /**
     * @var float|null
     */
    public ?float $version = null;

    /**
     * @var string|null
     */
    public ?string $chat_type = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var bool|null
     */
    public ?bool $default = null;

    /**
     * @var mixed
     */
    public $settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->version = $data['version'] ?? null;
        $this->chat_type = $data['chatType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->default = $data['default'] ?? null;
        $this->settings = $data['settings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->chat_type !== null) {
            $result['chatType'] = $this->chat_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->default !== null) {
            $result['default'] = $this->default;
        }
        if ($this->settings !== null) {
            $result['settings'] = $this->settings;
        }
        return $result;
    }
}
