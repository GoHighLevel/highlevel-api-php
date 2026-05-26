<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * FaqResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class FaqResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $question;

    /**
     * @var string
     */
    public string $question_lower_case;

    /**
     * @var string
     */
    public string $answer;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $trained_url_id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

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
        $this->id = $data['id'] ?? '';
        $this->question = $data['question'] ?? '';
        $this->question_lower_case = $data['questionLowerCase'] ?? '';
        $this->answer = $data['answer'] ?? '';
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->trained_url_id = $data['trainedUrlId'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
