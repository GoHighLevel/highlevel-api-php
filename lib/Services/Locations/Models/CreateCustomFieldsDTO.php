<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CreateCustomFieldsDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CreateCustomFieldsDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $data_type;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $accepted_format = null;

    /**
     * @var bool|null
     */
    public ?bool $is_multiple_file = null;

    /**
     * @var float|null
     */
    public ?float $max_number_of_files = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $text_box_list_options = null;

    /**
     * @var float|null
     */
    public ?float $position = null;

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
        $this->name = $data['name'] ?? '';
        $this->data_type = $data['dataType'] ?? '';
        $this->placeholder = $data['placeholder'] ?? null;
        $this->accepted_format = $data['acceptedFormat'] ?? null;
        $this->is_multiple_file = $data['isMultipleFile'] ?? null;
        $this->max_number_of_files = $data['maxNumberOfFiles'] ?? null;
        $this->text_box_list_options = $data['textBoxListOptions'] ?? null;
        $this->position = $data['position'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->data_type !== null) {
            $result['dataType'] = $this->data_type;
        }
        if ($this->placeholder !== null) {
            $result['placeholder'] = $this->placeholder;
        }
        if ($this->accepted_format !== null) {
            $result['acceptedFormat'] = $this->accepted_format;
        }
        if ($this->is_multiple_file !== null) {
            $result['isMultipleFile'] = $this->is_multiple_file;
        }
        if ($this->max_number_of_files !== null) {
            $result['maxNumberOfFiles'] = $this->max_number_of_files;
        }
        if ($this->text_box_list_options !== null) {
            $result['textBoxListOptions'] = $this->text_box_list_options;
        }
        if ($this->position !== null) {
            $result['position'] = $this->position;
        }
        if ($this->model !== null) {
            $result['model'] = $this->model;
        }
        return $result;
    }
}
