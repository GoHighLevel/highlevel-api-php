<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateServiceDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateServiceDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var array&lt;StaffDTO&gt;
     */
    public array $staff;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $event_color = null;

    /**
     * @var string|null
     */
    public ?string $cover_image = null;

    /**
     * @var string|null
     */
    public ?string $service_category_id = null;

    /**
     * @var mixed
     */
    public $payment;

    /**
     * @var float|null
     */
    public ?float $service_duration = null;

    /**
     * @var string|null
     */
    public ?string $service_duration_unit = null;

    /**
     * @var float|null
     */
    public ?float $pre_buffer = null;

    /**
     * @var string|null
     */
    public ?string $pre_buffer_unit = null;

    /**
     * @var float|null
     */
    public ?float $post_buffer = null;

    /**
     * @var string|null
     */
    public ?string $post_buffer_unit = null;

    /**
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * @var string|null
     */
    public ?string $form_id = null;

    /**
     * @var array&lt;CreateServiceVariationDTO&gt;|null
     */
    public ?array $variations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->slug = $data['slug'] ?? '';
        // Handle array of StaffDTO objects
        if (isset($data['staff']) && is_array($data['staff'])) {
            $this->staff = array_map(function($item) {
                return is_array($item) ? new StaffDTO($item) : $item;
            }, $data['staff']);
        } else {
            $this->staff = $data['staff'] ?? [];
        }
        $this->description = $data['description'] ?? null;
        $this->event_color = $data['eventColor'] ?? null;
        $this->cover_image = $data['coverImage'] ?? null;
        $this->service_category_id = $data['serviceCategoryId'] ?? null;
        $this->payment = $data['payment'] ?? null;
        $this->service_duration = $data['serviceDuration'] ?? null;
        $this->service_duration_unit = $data['serviceDurationUnit'] ?? null;
        $this->pre_buffer = $data['preBuffer'] ?? null;
        $this->pre_buffer_unit = $data['preBufferUnit'] ?? null;
        $this->post_buffer = $data['postBuffer'] ?? null;
        $this->post_buffer_unit = $data['postBufferUnit'] ?? null;
        $this->is_private = $data['isPrivate'] ?? null;
        $this->form_id = $data['formId'] ?? null;
        // Handle array of CreateServiceVariationDTO objects
        if (isset($data['variations']) && is_array($data['variations'])) {
            $this->variations = array_map(function($item) {
                return is_array($item) ? new CreateServiceVariationDTO($item) : $item;
            }, $data['variations']);
        } else {
            $this->variations = $data['variations'] ?? null;
        }
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
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->staff !== null) {
            $result['staff'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->staff);
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->event_color !== null) {
            $result['eventColor'] = $this->event_color;
        }
        if ($this->cover_image !== null) {
            $result['coverImage'] = $this->cover_image;
        }
        if ($this->service_category_id !== null) {
            $result['serviceCategoryId'] = $this->service_category_id;
        }
        if ($this->payment !== null) {
            $result['payment'] = $this->payment;
        }
        if ($this->service_duration !== null) {
            $result['serviceDuration'] = $this->service_duration;
        }
        if ($this->service_duration_unit !== null) {
            $result['serviceDurationUnit'] = $this->service_duration_unit;
        }
        if ($this->pre_buffer !== null) {
            $result['preBuffer'] = $this->pre_buffer;
        }
        if ($this->pre_buffer_unit !== null) {
            $result['preBufferUnit'] = $this->pre_buffer_unit;
        }
        if ($this->post_buffer !== null) {
            $result['postBuffer'] = $this->post_buffer;
        }
        if ($this->post_buffer_unit !== null) {
            $result['postBufferUnit'] = $this->post_buffer_unit;
        }
        if ($this->is_private !== null) {
            $result['isPrivate'] = $this->is_private;
        }
        if ($this->form_id !== null) {
            $result['formId'] = $this->form_id;
        }
        if ($this->variations !== null) {
            $result['variations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variations);
        }
        return $result;
    }
}
