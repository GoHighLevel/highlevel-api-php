<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * KnowledgeBaseMetadataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class KnowledgeBaseMetadataDTO
{
    /**
     * @var float
     */
    public float $faqs;

    /**
     * @var float
     */
    public float $urls;

    /**
     * @var float
     */
    public float $rich_text;

    /**
     * @var float
     */
    public float $files;

    /**
     * @var float
     */
    public float $web_searches;

    /**
     * @var float
     */
    public float $tables;

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
        $this->faqs = $data['faqs'] ?? 0;
        $this->urls = $data['urls'] ?? 0;
        $this->rich_text = $data['richText'] ?? 0;
        $this->files = $data['files'] ?? 0;
        $this->web_searches = $data['webSearches'] ?? 0;
        $this->tables = $data['tables'] ?? 0;
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
