<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\CustomMenus\Models;

/**
 * CustomMenuSchema model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class CustomMenuSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var mixed
     */
    public $icon;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var float|null
     */
    public ?float $order = null;

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
     * @var array&lt;string&gt;|null
     */
    public ?array $locations = null;

    /**
     * @var string|null
     */
    public ?string $open_mode = null;

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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->icon = $data['icon'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->order = $data['order'] ?? null;
        $this->show_on_company = $data['showOnCompany'] ?? null;
        $this->show_on_location = $data['showOnLocation'] ?? null;
        $this->show_to_all_locations = $data['showToAllLocations'] ?? null;
        $this->locations = $data['locations'] ?? null;
        $this->open_mode = $data['openMode'] ?? null;
        $this->user_role = $data['userRole'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->icon !== null) {
            $result['icon'] = $this->icon;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->order !== null) {
            $result['order'] = $this->order;
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
        if ($this->locations !== null) {
            $result['locations'] = $this->locations;
        }
        if ($this->open_mode !== null) {
            $result['openMode'] = $this->open_mode;
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
