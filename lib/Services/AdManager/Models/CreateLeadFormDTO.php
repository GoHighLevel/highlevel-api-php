<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * CreateLeadFormDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class CreateLeadFormDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var mixed
     */
    public mixed $greeting_card;

    /**
     * @var array&lt;FormQuestion&gt;
     */
    public array $questions;

    /**
     * @var string|null
     */
    public ?string $question_page_headline = null;

    /**
     * @var string
     */
    public string $privacy_policy_link;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_text = null;

    /**
     * @var mixed
     */
    public mixed $custom_disclaimer;

    /**
     * @var mixed
     */
    public mixed $thank_you_page;

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
        $this->type = $data['type'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->greeting_card = $data['greetingCard'] ?? null;
        // Handle array of FormQuestion objects
        if (isset($data['questions']) && is_array($data['questions'])) {
            $this->questions = array_map(function($item) {
                return is_array($item) ? new FormQuestion($item) : $item;
            }, $data['questions']);
        } else {
            $this->questions = $data['questions'] ?? [];
        }
        $this->question_page_headline = $data['questionPageHeadline'] ?? null;
        $this->privacy_policy_link = $data['privacyPolicyLink'] ?? '';
        $this->privacy_policy_text = $data['privacyPolicyText'] ?? null;
        $this->custom_disclaimer = $data['customDisclaimer'] ?? null;
        $this->thank_you_page = $data['thankYouPage'] ?? null;
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
