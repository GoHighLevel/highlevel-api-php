<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public $icon;

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->icon !== null) {
            $result['icon'] = $this->icon;
        }
        if ($this->show_on_company !== null) {
            $result['showOnCompany'] = $this->show_on_company;
        }
        if ($this->show_on_location !== null) {
            $result['showOnLocation'] = $this->show_on_location;
        }
        if ($this->show_to_all_locations !== null) {
            $result['showToAllLocations'] = $this->show_to_all_locations;
        }
        if ($this->open_mode !== null) {
            $result['openMode'] = $this->open_mode;
        }
        if ($this->locations !== null) {
            $result['locations'] = $this->locations;
        }
        if ($this->user_role !== null) {
            $result['userRole'] = $this->user_role;
        }
        if ($this->allow_camera !== null) {
            $result['allowCamera'] = $this->allow_camera;
        }
        if ($this->allow_microphone !== null) {
            $result['allowMicrophone'] = $this->allow_microphone;
        }
        return $result;
    }
}
