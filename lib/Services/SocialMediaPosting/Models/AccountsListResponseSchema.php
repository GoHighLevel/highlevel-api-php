<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * AccountsListResponseSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class AccountsListResponseSchema
{
    /**
     * @var array&lt;GetAccountSchema&gt;|null
     */
    public ?array $accounts = null;

    /**
     * @var array&lt;GetGroupSchema&gt;|null
     */
    public ?array $groups = null;

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
        // Handle array of GetAccountSchema objects
        if (isset($data['accounts']) && is_array($data['accounts'])) {
            $this->accounts = array_map(function($item) {
                return is_array($item) ? new GetAccountSchema($item) : $item;
            }, $data['accounts']);
        } else {
            $this->accounts = $data['accounts'] ?? null;
        }
        // Handle array of GetGroupSchema objects
        if (isset($data['groups']) && is_array($data['groups'])) {
            $this->groups = array_map(function($item) {
                return is_array($item) ? new GetGroupSchema($item) : $item;
            }, $data['groups']);
        } else {
            $this->groups = $data['groups'] ?? null;
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
