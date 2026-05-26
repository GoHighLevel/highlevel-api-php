<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LinkedInCreateLeadFormBodyDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class LinkedInCreateLeadFormBodyDTO
{
    /**
     * @var mixed
     */
    public mixed $owner;

    /**
     * @var mixed
     */
    public mixed $creation_locale;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $state;

    /**
     * @var mixed
     */
    public mixed $content;

    /**
     * @var array&lt;HiddenFieldDTO&gt;|null
     */
    public ?array $hidden_fields = null;

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
        $this->owner = $data['owner'] ?? null;
        $this->creation_locale = $data['creationLocale'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->state = $data['state'] ?? '';
        $this->content = $data['content'] ?? null;
        // Handle array of HiddenFieldDTO objects
        if (isset($data['hiddenFields']) && is_array($data['hiddenFields'])) {
            $this->hidden_fields = array_map(function($item) {
                return is_array($item) ? new HiddenFieldDTO($item) : $item;
            }, $data['hiddenFields']);
        } else {
            $this->hidden_fields = $data['hiddenFields'] ?? null;
        }
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
