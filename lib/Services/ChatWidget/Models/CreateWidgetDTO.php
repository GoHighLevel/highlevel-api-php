<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * CreateWidgetDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class CreateWidgetDTO
{
    /**
     * @var float
     */
    public float $version;

    /**
     * @var string
     */
    public string $chat_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

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
        $this->version = $data['version'] ?? 0;
        $this->chat_type = $data['chatType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->deleted = $data['deleted'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
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
