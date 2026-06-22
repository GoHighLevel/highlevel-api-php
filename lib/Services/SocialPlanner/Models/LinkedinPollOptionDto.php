<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * LinkedinPollOptionDto model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class LinkedinPollOptionDto
{
    /**
     * @var string
     */
    public string $text;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->text = $data['text'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }
}
