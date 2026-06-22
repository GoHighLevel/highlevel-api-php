<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomFieldSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomFieldSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $field_key = null;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var string|null
     */
    public ?string $data_type = null;

    /**
     * @var float|null
     */
    public ?float $position = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $picklist_options = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $picklist_image_options = null;

    /**
     * @var bool|null
     */
    public ?bool $is_allowed_custom_option = null;

    /**
     * @var bool|null
     */
    public ?bool $is_multi_file_allowed = null;

    /**
     * @var float|null
     */
    public ?float $max_file_limit = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $model = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->field_key = $data['fieldKey'] ?? null;
        $this->placeholder = $data['placeholder'] ?? null;
        $this->data_type = $data['dataType'] ?? null;
        $this->position = $data['position'] ?? null;
        $this->picklist_options = $data['picklistOptions'] ?? null;
        $this->picklist_image_options = $data['picklistImageOptions'] ?? null;
        $this->is_allowed_custom_option = $data['isAllowedCustomOption'] ?? null;
        $this->is_multi_file_allowed = $data['isMultiFileAllowed'] ?? null;
        $this->max_file_limit = $data['maxFileLimit'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->model = $data['model'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->field_key !== null) {
            $result['fieldKey'] = $this->field_key;
        }
        if ($this->placeholder !== null) {
            $result['placeholder'] = $this->placeholder;
        }
        if ($this->data_type !== null) {
            $result['dataType'] = $this->data_type;
        }
        if ($this->position !== null) {
            $result['position'] = $this->position;
        }
        if ($this->picklist_options !== null) {
            $result['picklistOptions'] = $this->picklist_options;
        }
        if ($this->picklist_image_options !== null) {
            $result['picklistImageOptions'] = $this->picklist_image_options;
        }
        if ($this->is_allowed_custom_option !== null) {
            $result['isAllowedCustomOption'] = $this->is_allowed_custom_option;
        }
        if ($this->is_multi_file_allowed !== null) {
            $result['isMultiFileAllowed'] = $this->is_multi_file_allowed;
        }
        if ($this->max_file_limit !== null) {
            $result['maxFileLimit'] = $this->max_file_limit;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->model !== null) {
            $result['model'] = $this->model;
        }
        return $result;
    }
}
