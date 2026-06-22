<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * CreateCustomFieldsDTO model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class CreateCustomFieldsDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $placeholder = null;

    /**
     * @var bool
     */
    public bool $show_in_forms;

    /**
     * @var array&lt;OptionDTO&gt;|null
     */
    public ?array $options = null;

    /**
     * @var string|null
     */
    public ?string $accepted_formats = null;

    /**
     * @var string
     */
    public string $data_type;

    /**
     * @var string
     */
    public string $field_key;

    /**
     * @var string
     */
    public string $object_key;

    /**
     * @var float|null
     */
    public ?float $max_file_limit = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_custom_option = null;

    /**
     * @var string
     */
    public string $parent_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->placeholder = $data['placeholder'] ?? null;
        $this->show_in_forms = $data['showInForms'] ?? false;
        // Handle array of OptionDTO objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new OptionDTO($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? null;
        }
        $this->accepted_formats = $data['acceptedFormats'] ?? null;
        $this->data_type = $data['dataType'] ?? '';
        $this->field_key = $data['fieldKey'] ?? '';
        $this->object_key = $data['objectKey'] ?? '';
        $this->max_file_limit = $data['maxFileLimit'] ?? null;
        $this->allow_custom_option = $data['allowCustomOption'] ?? null;
        $this->parent_id = $data['parentId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->placeholder !== null) {
            $result['placeholder'] = $this->placeholder;
        }
        if ($this->show_in_forms !== null) {
            $result['showInForms'] = $this->show_in_forms;
        }
        if ($this->options !== null) {
            $result['options'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->options);
        }
        if ($this->accepted_formats !== null) {
            $result['acceptedFormats'] = $this->accepted_formats;
        }
        if ($this->data_type !== null) {
            $result['dataType'] = $this->data_type;
        }
        if ($this->field_key !== null) {
            $result['fieldKey'] = $this->field_key;
        }
        if ($this->object_key !== null) {
            $result['objectKey'] = $this->object_key;
        }
        if ($this->max_file_limit !== null) {
            $result['maxFileLimit'] = $this->max_file_limit;
        }
        if ($this->allow_custom_option !== null) {
            $result['allowCustomOption'] = $this->allow_custom_option;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        return $result;
    }
}
