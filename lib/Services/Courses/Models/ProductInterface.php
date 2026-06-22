<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Courses\Models;

/**
 * ProductInterface model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class ProductInterface
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string|null
     */
    public ?string $image_url = null;

    /**
     * @var array&lt;CategoryInterface&gt;
     */
    public array $categories;

    /**
     * @var InstructorDetails|null
     */
    public ?InstructorDetails $instructor_details = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->image_url = $data['imageUrl'] ?? null;
        // Handle array of CategoryInterface objects
        if (isset($data['categories']) && is_array($data['categories'])) {
            $this->categories = array_map(function($item) {
                return is_array($item) ? new CategoryInterface($item) : $item;
            }, $data['categories']);
        } else {
            $this->categories = $data['categories'] ?? [];
        }
        // Handle single InstructorDetails object
        if (isset($data['instructorDetails']) && is_array($data['instructorDetails'])) {
            $this->instructor_details = new InstructorDetails($data['instructorDetails']);
        } else {
            $this->instructor_details = $data['instructorDetails'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->categories !== null) {
            $result['categories'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->categories);
        }
        if ($this->instructor_details !== null) {
            $result['instructorDetails'] = is_object($this->instructor_details) && method_exists($this->instructor_details, 'toArray') 
                ? $this->instructor_details->toArray() 
                : $this->instructor_details;
        }
        return $result;
    }
}
