<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateConversationFormDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateConversationFormDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $text;

    /**
     * @var array&lt;WelcomeMessageQuestion&gt;
     */
    public array $questions;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->text = $data['text'] ?? '';
        // Handle array of WelcomeMessageQuestion objects
        if (isset($data['questions']) && is_array($data['questions'])) {
            $this->questions = array_map(function($item) {
                return is_array($item) ? new WelcomeMessageQuestion($item) : $item;
            }, $data['questions']);
        } else {
            $this->questions = $data['questions'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        if ($this->questions !== null) {
            $result['questions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->questions);
        }
        return $result;
    }
}
