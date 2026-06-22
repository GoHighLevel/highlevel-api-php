<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * WelcomeMessageQuestion model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class WelcomeMessageQuestion
{
    /**
     * @var string
     */
    public string $question;

    /**
     * @var string|null
     */
    public ?string $response = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->question = $data['question'] ?? '';
        $this->response = $data['response'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->question !== null) {
            $result['question'] = $this->question;
        }
        if ($this->response !== null) {
            $result['response'] = $this->response;
        }
        return $result;
    }
}
