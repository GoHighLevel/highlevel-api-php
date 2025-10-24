<?php

namespace HighLevel\Services\Surveys\Models;

/**
 * GetSurveysSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class GetSurveysSuccessfulResponseDto
{
    /**
     * @var array&lt;GetSurveysSchema&gt;|null
     */
    public ?array $surveys = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

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
        // Handle array of GetSurveysSchema objects
        if (isset($data['surveys']) && is_array($data['surveys'])) {
            $this->surveys = array_map(function($item) {
                return is_array($item) ? new GetSurveysSchema($item) : $item;
            }, $data['surveys']);
        } else {
            $this->surveys = $data['surveys'] ?? null;
        }
        $this->total = $data['total'] ?? null;
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
