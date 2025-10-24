<?php

namespace HighLevel\Services\Emails\Models;

/**
 * SaveBuilderDataDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class SaveBuilderDataDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $template_id;

    /**
     * @var string
     */
    public string $updated_by;

    /**
     * @var mixed
     */
    public mixed $dnd;

    /**
     * @var string
     */
    public string $html;

    /**
     * @var string
     */
    public string $editor_type;

    /**
     * @var string|null
     */
    public ?string $preview_text = null;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->template_id = $data['templateId'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? '';
        $this->dnd = $data['dnd'] ?? null;
        $this->html = $data['html'] ?? '';
        $this->editor_type = $data['editorType'] ?? '';
        $this->preview_text = $data['previewText'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
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
