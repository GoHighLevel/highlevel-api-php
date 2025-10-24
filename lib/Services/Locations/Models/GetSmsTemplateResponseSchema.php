<?php

namespace HighLevel\Services\Locations\Models;

/**
 * GetSmsTemplateResponseSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetSmsTemplateResponseSchema
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
    public ?string $type = null;

    /**
     * @var SmsTemplateSchema|null
     */
    public ?SmsTemplateSchema $template = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $url_attachments = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->type = $data['type'] ?? null;
        // Handle single SmsTemplateSchema object
        if (isset($data['template']) && is_array($data['template'])) {
            $this->template = new SmsTemplateSchema($data['template']);
        } else {
            $this->template = $data['template'] ?? null;
        }
        $this->date_added = $data['dateAdded'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->url_attachments = $data['urlAttachments'] ?? null;
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
