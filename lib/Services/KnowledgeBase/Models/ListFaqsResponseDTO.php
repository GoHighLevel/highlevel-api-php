<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * ListFaqsResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class ListFaqsResponseDTO
{
    /**
     * @var float
     */
    public float $count;

    /**
     * @var array&lt;FaqResponseDTO&gt;
     */
    public array $faqs;

    /**
     * @var string|null
     */
    public ?string $last_faq_id = null;

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
        $this->count = $data['count'] ?? 0;
        // Handle array of FaqResponseDTO objects
        if (isset($data['faqs']) && is_array($data['faqs'])) {
            $this->faqs = array_map(function($item) {
                return is_array($item) ? new FaqResponseDTO($item) : $item;
            }, $data['faqs']);
        } else {
            $this->faqs = $data['faqs'] ?? [];
        }
        $this->last_faq_id = $data['lastFaqId'] ?? null;
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
