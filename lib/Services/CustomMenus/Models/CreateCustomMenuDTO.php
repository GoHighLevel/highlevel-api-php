<?php

namespace HighLevel\Services\CustomMenus\Models;

/**
 * CreateCustomMenuDTO model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class CreateCustomMenuDTO
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var mixed
     */
    public mixed $icon;

    /**
     * @var bool
     */
    public bool $show_on_company;

    /**
     * @var bool
     */
    public bool $show_on_location;

    /**
     * @var bool
     */
    public bool $show_to_all_locations;

    /**
     * @var string
     */
    public string $open_mode;

    /**
     * @var array&lt;string&gt;
     */
    public array $locations;

    /**
     * @var string
     */
    public string $user_role;

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
        $this->title = $data['title'] ?? '';
        $this->url = $data['url'] ?? '';
        $this->icon = $data['icon'] ?? null;
        $this->show_on_company = $data['showOnCompany'] ?? false;
        $this->show_on_location = $data['showOnLocation'] ?? false;
        $this->show_to_all_locations = $data['showToAllLocations'] ?? false;
        $this->open_mode = $data['openMode'] ?? '';
        $this->locations = $data['locations'] ?? [];
        $this->user_role = $data['userRole'] ?? '';
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
