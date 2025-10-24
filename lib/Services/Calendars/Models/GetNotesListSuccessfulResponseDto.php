<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetNotesListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetNotesListSuccessfulResponseDto
{
    /**
     * @var array&lt;GetNoteSchema&gt;|null
     */
    public ?array $notes = null;

    /**
     * @var bool|null
     */
    public ?bool $has_more = null;

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
        // Handle array of GetNoteSchema objects
        if (isset($data['notes']) && is_array($data['notes'])) {
            $this->notes = array_map(function($item) {
                return is_array($item) ? new GetNoteSchema($item) : $item;
            }, $data['notes']);
        } else {
            $this->notes = $data['notes'] ?? null;
        }
        $this->has_more = $data['hasMore'] ?? null;
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
