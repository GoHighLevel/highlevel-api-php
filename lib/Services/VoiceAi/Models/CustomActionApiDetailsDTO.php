<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CustomActionApiDetailsDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CustomActionApiDetailsDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $method;

    /**
     * @var bool|null
     */
    public ?bool $authentication_required = null;

    /**
     * @var string|null
     */
    public ?string $authentication_value = null;

    /**
     * @var array&lt;CustomActionHeaderDTO&gt;|null
     */
    public ?array $headers = null;

    /**
     * @var array&lt;CustomActionParameterDTO&gt;|null
     */
    public ?array $parameters = null;

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
        $this->url = $data['url'] ?? '';
        $this->method = $data['method'] ?? '';
        $this->authentication_required = $data['authenticationRequired'] ?? null;
        $this->authentication_value = $data['authenticationValue'] ?? null;
        // Handle array of CustomActionHeaderDTO objects
        if (isset($data['headers']) && is_array($data['headers'])) {
            $this->headers = array_map(function($item) {
                return is_array($item) ? new CustomActionHeaderDTO($item) : $item;
            }, $data['headers']);
        } else {
            $this->headers = $data['headers'] ?? null;
        }
        // Handle array of CustomActionParameterDTO objects
        if (isset($data['parameters']) && is_array($data['parameters'])) {
            $this->parameters = array_map(function($item) {
                return is_array($item) ? new CustomActionParameterDTO($item) : $item;
            }, $data['parameters']);
        } else {
            $this->parameters = $data['parameters'] ?? null;
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
