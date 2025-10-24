<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * TemplateListResponseDTO model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class TemplateListResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var float
     */
    public float $version;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $updated_by;

    /**
     * @var bool
     */
    public bool $is_public_document;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var float|null
     */
    public ?float $document_count = null;

    /**
     * @var string|null
     */
    public ?string $doc_form_url = null;

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
        $this->id = $data['_id'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->version = $data['version'] ?? 0;
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? '';
        $this->is_public_document = $data['isPublicDocument'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->document_count = $data['documentCount'] ?? null;
        $this->doc_form_url = $data['docFormUrl'] ?? null;
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
