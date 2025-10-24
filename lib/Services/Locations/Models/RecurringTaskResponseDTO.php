<?php

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
    public mixed $rrule_options;

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
