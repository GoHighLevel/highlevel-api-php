<?php

namespace HighLevel\Services\CustomMenus\Models;

/**
 * UpdateCustomMenuDTO model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class UpdateCustomMenuDTO
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var mixed
     */
    public mixed $icon;

    /**
     * @var bool|null
     */
    public ?bool $show_on_company = null;

    /**
     * @var bool|null
     */
    public ?bool $show_on_location = null;

    /**
     * @var bool|null
     */
    public ?bool $show_to_all_locations = null;

    /**
     * @var string|null
     */
    public ?string $open_mode = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $locations = null;

    /**
     * @var string|null
     */
    public ?string $user_role = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_camera = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_microphone = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->icon = $data['icon'] ?? null;
        $this->show_on_company = $data['showOnCompany'] ?? null;
        $this->show_on_location = $data['showOnLocation'] ?? null;
        $this->show_to_all_locations = $data['showToAllLocations'] ?? null;
        $this->open_mode = $data['openMode'] ?? null;
        $this->locations = $data['locations'] ?? null;
        $this->user_role = $data['userRole'] ?? null;
        $this->allow_camera = $data['allowCamera'] ?? null;
        $this->allow_microphone = $data['allowMicrophone'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
