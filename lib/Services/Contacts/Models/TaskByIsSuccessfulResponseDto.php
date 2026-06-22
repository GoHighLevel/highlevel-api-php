<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * TaskByIsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class TaskByIsSuccessfulResponseDto
{
    /**
     * @var mixed
     */
    public $task;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->task = $data['task'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->task !== null) {
            $result['task'] = $this->task;
        }
        return $result;
    }
}
