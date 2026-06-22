<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CreateFaqResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CreateFaqResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var mixed
     */
    public $faq;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->faq = $data['faq'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->faq !== null) {
            $result['faq'] = $this->faq;
        }
        return $result;
    }
}
