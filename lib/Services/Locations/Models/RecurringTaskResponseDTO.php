<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * RecurringTaskResponseDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class RecurringTaskResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var mixed
     */
    public $rrule_options;

    /**
     * @var float
     */
    public float $total_occurrence;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->rrule_options = $data['rruleOptions'] ?? null;
        $this->total_occurrence = $data['totalOccurrence'] ?? 0;
        $this->deleted = $data['deleted'] ?? false;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->rrule_options !== null) {
            $result['rruleOptions'] = $this->rrule_options;
        }
        if ($this->total_occurrence !== null) {
            $result['totalOccurrence'] = $this->total_occurrence;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        return $result;
    }
}
