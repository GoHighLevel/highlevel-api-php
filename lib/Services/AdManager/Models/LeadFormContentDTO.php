<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LeadFormContentDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class LeadFormContentDTO
{
    /**
     * @var array&lt;LeadFormQuestionDTO&gt;
     */
    public array $questions;

    /**
     * @var mixed
     */
    public mixed $description;

    /**
     * @var mixed
     */
    public mixed $headline;

    /**
     * @var mixed
     */
    public mixed $post_submission_info;

    /**
     * @var mixed
     */
    public mixed $legal_info;

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
        // Handle array of LeadFormQuestionDTO objects
        if (isset($data['questions']) && is_array($data['questions'])) {
            $this->questions = array_map(function($item) {
                return is_array($item) ? new LeadFormQuestionDTO($item) : $item;
            }, $data['questions']);
        } else {
            $this->questions = $data['questions'] ?? [];
        }
        $this->description = $data['description'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->post_submission_info = $data['postSubmissionInfo'] ?? null;
        $this->legal_info = $data['legalInfo'] ?? null;
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
